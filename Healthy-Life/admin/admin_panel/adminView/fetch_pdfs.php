<?php
$uploadDir = "uploads/";
$uploadedFiles = glob($uploadDir . "*.pdf");
foreach ($uploadedFiles as $file) {
    $filename = basename($file);
    echo '<li><a href="' . $file . '">' . $filename . '</a></li>';
}
?>
