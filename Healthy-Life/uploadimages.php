<?php
// Connect to your database
$host = 'localhost';
$db = 'userform';
$user = 'root';
$password = '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

// Check if a file was uploaded
if (isset($_FILES['uploadedImage'])) {
    $fileName = $_FILES['uploadedImage']['name'];
    $fileTmp = $_FILES['uploadedImage']['tmp_name'];
    $fileData = file_get_contents($fileTmp);

    // Insert image details into the database
    $stmt = $pdo->prepare('INSERT INTO images (name, image_data) VALUES (?, ?)');
    $stmt->execute([$fileName, $fileData]);

    echo "Image uploaded successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 400px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Image Upload</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Select Image:</label>
                <input type="file" class="form-control-file" id="image" name="uploadedImage">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>
