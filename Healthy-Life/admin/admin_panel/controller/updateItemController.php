<?php
    include_once "../config/dbconnect.php";

    $product_id = $_POST['product_id'];
    $p_name = $_POST['p_name'];
    $p_desc = $_POST['p_desc'];
    $p_price = $_POST['p_price'];
    $category = $_POST['category'];

    // Convert the price to a decimal value (assuming 'price' field is in decimal format in the database)
    $p_price_decimal = (float) $p_price;

    if (isset($_FILES['newImage'])) {
        $location = "./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');
        $image = rand(1000, 1000000) . "." . $ext;
        $final_image = $location . $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir . $image);
        }
    } else {
        $final_image = $_POST['existingImage'];
    }

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("UPDATE product SET 
        product_name = ?, 
        product_description = ?, 
        product_image = ?, 
        price = ?, 
        category_id = ?
        WHERE product_id = ?");
    $stmt->bind_param("ssssii", $p_name, $p_desc, $final_image, $p_price_decimal, $category, $product_id);

    if ($stmt->execute()) {
        echo "true";
    } else {
        echo "false";
    }

    $stmt->close();
    $conn->close();
?>
