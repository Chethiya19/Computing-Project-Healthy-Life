<?php

if(!isset($_SESSION))
  {
    session_start();
  }

include 'connection.php';
$conn = Connect();

$P_ID = $_GET['id'];
$action = $_GET['action'];




$sql = "SELECT quantity FROM product WHERE product_id = ".$P_ID;

$result = mysqli_query($conn, $sql);


if($result){

  if($obj = mysqli_fetch_assoc($result)) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$P_ID]+1 <= $row["Product_quantity"])
        $_SESSION['cart'][$P_ID]++;
      break;

      case "remove":
      $_SESSION['cart'][$P_ID]--;
      if($_SESSION['cart'][$P_ID] == 0)
        unset($_SESSION['cart'][$P_ID]);
        break;



    }
  }
}



header("location:cart.php");

?>
