<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload'])){
       
        $breakfast = $_POST['breakfast'];
        $lunch = $_POST['lunch'];
        $dinner = $_POST['dinner'];
        $instructions = $_POST['instructions'];       
            
        // Insert the data into the food_schedule_diabetes table
        $insert = mysqli_query($conn, "INSERT INTO food_schedule_diabetes
            (breakfast, lunch, dinner, instructions) 
            VALUES ('$breakfast', '$lunch', '$dinner', '$instructions')");

        if(!$insert) {
            echo mysqli_error($conn);
        } else {
            echo "Food schedule added successfully.";
        }
    }
?>
