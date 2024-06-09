<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM deliveryboy where deliveryboy_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Delivery Boy Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>