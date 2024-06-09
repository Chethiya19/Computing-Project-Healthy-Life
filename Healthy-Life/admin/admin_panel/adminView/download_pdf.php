<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $fileDir = 'uploads/';
    $filePath = $fileDir . $file;

    if (file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename=' . basename($filePath));
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        echo "File not found.";
    }
}
?>
