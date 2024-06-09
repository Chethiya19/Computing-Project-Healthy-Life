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

<!DOCTYPE html>
<html>
<head>
    <title>PDF File Upload and Download</title>
</head>
<body>
    <h1>PDF File Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pdfFile" id="pdfFile">
        <input type="submit" value="Upload PDF" name="submit">
    </form>

    <h2>Uploaded PDFs</h2>
    <ul>
        <?php
        // Fetch the list of uploaded PDF files
        $uploadDir = "uploads/";
        $uploadedFiles = glob($uploadDir . "*.pdf");
        foreach ($uploadedFiles as $file) {
            $filename = basename($file);
            echo '<li><a href="download.php?file=' . $filename . '">' . $filename . '</a></li>';
        }
        ?>
    </ul>
</body>
</html>

