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

// Check if the image ID is provided
if (isset($_GET['image_id'])) {
  $imageId = $_GET['image_id'];

  // Retrieve image details from the database
  $stmt = $pdo->prepare('SELECT * FROM images WHERE id = ?');
  $stmt->execute([$imageId]);
  $image = $stmt->fetch();

  if ($image) {
    $imageName = $image['name'];
    $imageData = $image['image_data'];

    // Set the appropriate content headers
    header('Content-Type: image/jpeg');
    header("Content-Disposition: attachment; filename=\"$imageName\"");

    // Output the image data
    echo $imageData;
    exit;
  } else {
    echo "Image not found.";
  }
}
?>
