<?php

    if(isset($_POST['upload'])){
        
        include_once "../config/dbconnect.php";
        
        $first_name = $_POST['f_name'];
        $last_name = $_POST['l_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $vehicle_number = $_POST['vehicle_number'];
        
        $stmt = $conn->prepare("INSERT INTO delivery_boys (first_name, last_name, email, phone_number, address, vehicle_number) VALUES (?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $address, $vehicle_number);
        
        if ($stmt->execute()) {
            echo "Delivery boy added successfully.";
        } else {
            echo "Error adding delivery boy: " . $conn->error;
        }
        
        $stmt->close();
        $conn->close();
    }
?>
