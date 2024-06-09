<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Cart | Healthy Life </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/payment.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Healthy Life</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>


<ul class="nav navbar-nav navbar-right">
            <li><a href="customersignup.php" class="active">Sign Up</a></li>

            <li><a href="customerlogin.php" class="active">Login</a><li>
          </ul>

<?php
}
?>
      </div>

      </div>
    </nav>


<?php
$gtotal = 0;

$username = $_SESSION["login_user2"];
$query = "SELECT * FROM customer WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customer_id = $row['customer_id'];
    $contact = $row['contact'];
    $address = $row['address'];

    // Insert into the "orders" table
    $order_date = date('Y-m-d');
    $insert_order_query = "INSERT INTO tbl_orders (customer_id, contact, address, total, order_status, order_date) 
                           VALUES (?, ?, ?, ?, '0', ?)";
    $stmt = $conn->prepare($insert_order_query);
    $stmt->bind_param("issds", $customer_id, $contact, $address, $gtotal, $order_date);
    $success = $stmt->execute();

    if ($success) {
        $order_id = $conn->insert_id; // Get the auto-generated order ID from the "orders" table

        // Insert each item in the order into the "order_details" table
        foreach ($_SESSION["cart"] as $keys => $values) {
            $P_ID = $values["product_id"];
            $productname = $values["product_name"];
            $quantity = $values["product_quantity"];
            $price = $values["price"];
            $total = $quantity * $price;

            $insert_order_details_query = "INSERT INTO tbl_order_details (order_id, product_id, product_name, product_quantity, price, total) 
                                           VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insert_order_details_query);
            $stmt->bind_param("iisidd", $order_id, $P_ID, $productname, $quantity, $price, $total);
            $success_details = $stmt->execute();

            if (!$success_details) {
                // Handle the error if the item insertion fails
                ?>
                <div class="container">
                    <div class="jumbotron">
                        <h1>Something went wrong!</h1>
                        <p>Try again later.</p>
                    </div>
                </div>
                <?php
                break; // Exit the loop if there was an error with any item insertion
            }

            $gtotal += $total;
        }

        // Update the "total" field in the "tbl_orders" table
        $update_total_query = "UPDATE tbl_orders SET total = ? WHERE order_id = ?";
        $stmt = $conn->prepare($update_total_query);
        $stmt->bind_param("di", $gtotal, $order_id);
        $stmt->execute();

        // You can proceed with further actions if all item insertions were successful
    } else {
        // Handle the error if the order insertion fails
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Something went wrong!</h1>
                <p>Try again later.</p>
            </div>
        </div>
        <?php
    }
}
?>



        <div class="container">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>
<h1 class="text-center">Grand Total: &#8360;<?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
        </body>
</html>