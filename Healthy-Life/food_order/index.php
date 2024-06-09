<?php
session_start();
?>

<html>

  <head>
      <link href="images/logo.png" rel="icon">
      <title> Order Now</title>
      <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

      <link rel="stylesheet" type = "text/css" href ="css/index.css">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Healthy Life | Order Now</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="../index.php">Home</a></li>
            <li><a href="../index.php#about">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

          <?php
                if (isset($_SESSION['login_user'])) {
                    ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user']; ?> </a></li>
                    <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (<?php
                    if (isset($_SESSION["cart"])) {
                        $count = count($_SESSION["cart"]);
                        echo "$count";
                    } else
                        echo "0";
                    ?>)
                        </a></li>
                    <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
                </ul>
                <?php
                } else {
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

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/Healthy-logo.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">First Your should log into the system</div>
    </div>
    <div class="orderblock">
    <h2>Guest Login</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Login </a></center>
    </div>

    
  
</body>
</html>