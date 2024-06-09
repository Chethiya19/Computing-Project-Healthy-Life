<?php
    include_once "../config/dbconnect.php";

    // Assuming you have the following fields in the 'delivery_boys' table
    $deliveryboy_id = $_POST['deliveryboy_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $vehicle_number = $_POST['vehicle_number'];

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("UPDATE delivery_boys SET 
        first_name = ?, 
        last_name = ?, 
        email = ?, 
        phone_number = ?, 
        address = ? 
        vehicle_number = ?,
        WHERE deliveryboy_id = ?");
    $stmt->bind_param("sssssi", $first_name, $last_name, $email, $phone_number, $address, $vehicle_number, $deliveryboy_id);

    if ($stmt->execute()) {
        echo "true";
    } else {
        echo "false";
    }

    $stmt->close();
    $conn->close();
?>
