<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM food_schedule_diabetes where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Food Schedule Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
