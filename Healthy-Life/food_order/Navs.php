<!DOCTYPE html>
<html>
<head>
    <title>Two Navigation Bars with Custom Z-Index</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        /* Custom CSS for the first navigation bar */
        .navbar-first {
            display: flex;
            justify-content: space-between;
            box-shadow: 0px 5px 5px -7px;
            position: fixed;
            top: 0;
        width: 100%;
        z-index: 1000;
        }

        /* Custom CSS for the second navigation bar */
        .navbar-second {
            display: flex;
            justify-content: space-between;
            box-shadow: 0px 5px 5px -7px;
            position: fixed;
            top: 0;
            width: 100%;
        z-index: 1000;
        }
    </style>
</head>
<body>

<!-- First Navigation Bar -->
<nav class="navbar navbar-default navbar-first fixed-top">
    <!-- ... Your navigation bar content ... -->
</nav>

<!-- Second Navigation Bar -->
<nav class="navbar navbar-inverse navbar-second">
    <!-- ... Your navigation bar content ... -->
</nav>

<!-- Your content goes here -->


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
require 'connection.php';
$conn = Connect();

// Fetch all distinct category names from the database
$sql_categories = "SELECT DISTINCT category_id, category_name FROM category";
$result_categories = mysqli_query($conn, $sql_categories);

// Check if a specific category_id is selected from the dropdown, if yes, apply the filter
if (isset($_GET['category_id'])) {
  $category_id = $_GET['category_id'];
  $sql = "SELECT * FROM product WHERE category_id = '$category_id' ORDER BY product_id";
} else {
  $sql = "SELECT * FROM product ORDER BY product_id";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $count = 0;

  while ($row = mysqli_fetch_assoc($result)) {
    if ($count == 0)
      echo "<div class='row'>";

    ?>
    <div class="col-md-3">
      <form method="post" action="cart.php?action=add&id=<?php echo $row["product_id"]; ?>">
        <div class="mypanel" align="center">
          <img src="<?php echo $row["product_image"]; ?>" class="img-responsive">
          <h4 class="text-dark"><?php echo $row["product_name"]; ?></h4>
          <h5 class="text-info"><?php echo $row["product_description"]; ?></h5>
          <h5 class="text-danger">&#8360; <?php echo $row["price"]; ?>/-</h5>
          <h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
          <input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>">
          <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
          <input type="hidden" name="hidden_CID" value="<?php echo $row["category_id"]; ?>">
          <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
        </div>
      </form>
    </div>

    <?php
    $count++;
    if ($count == 4) {
      echo "</div>";
      $count = 0;
    }
  }
} else {
  echo "No products found.";
}
?>

<!-- Add the filter dropdown with category names -->
<div class="filter-dropdown">
  <form id="categoryForm" method="get">
    <select id="categoryFilter" name="category_id" onchange="filterProducts()">
      <option value="">Select a category</option>
      <?php
      // Populate the dropdown with category names
      while ($row_category = mysqli_fetch_assoc($result_categories)) {
        $categoryId = $row_category['category_id'];
        $categoryName = $row_category['category_name'];
        $selected = ($category_id == $categoryId) ? "selected" : "";
        echo "<option value=\"$categoryId\" $selected>$categoryName</option>";
      }
      ?>
    </select>
  </form>
</div>

<!-- JavaScript function to apply the filter -->
<script>
  function filterProducts() {
    document.getElementById("categoryForm").submit();
  }
</script>


</body>
</html>

