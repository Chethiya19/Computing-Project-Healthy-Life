<div>
  <h2>Userform Details</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Age</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Address</th>
        <th class="text-center">Contact</th>
        <th class="text-center">Disease</th>
        <th class="text-center">PDF</th>
      </tr>
    </thead>
    <?php
      include_once "../config/DB.php";
      $sql = "SELECT * FROM tbl_userform";
      $result = $conn->query($sql);
      $count = 1;
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?= $count ?></td>
      <td><?= $row["firstname"] ?> <?= $row["lastname"] ?></td>
      <td><?= $row["age"] ?></td>
      <td><?= $row["gender"] ?></td>
      <td><?= $row["address"] ?></td>
      <td><?= $row["phone"] ?></td>
      <td><?= $row["diseases"] ?></td>
      <td>
        <?php
          $pdfFile = $row["pdf"];
          if ($pdfFile !== null && !empty(trim($pdfFile))) {
            $pdfFilePath = "uploads/" . $pdfFile; // Change this path to the actual location of your PDF files
            echo '<a href="' . $pdfFilePath . '" download>' . $pdfFile . '</a>';
          } else {
            echo "No PDF available";
          }
        ?>
      </td>
    </tr>
    <?php
      $count = $count + 1;
        }
      }
    ?>
  </table>
</div>



<?php
$uploadDir = "uploads/";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["pdfFile"])) {
    $targetFile = $uploadDir . basename($_FILES["pdfFile"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is a PDF
    if ($fileType != "pdf") {
        echo "Only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if the file was successfully uploaded
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["pdfFile"]["name"]) . " has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Fetch the list of uploaded PDF files
$uploadedFiles = glob($uploadDir . "*.pdf");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PDF File Upload and Display</title>
</head>
<body>
    <h1>PDF File Upload</h1>
    <form id="pdfUploadForm" enctype="multipart/form-data">
        <input type="file" name="pdfFile" id="pdfFile">
        <input type="button" value="Upload PDF" name="submit" id="uploadButton">
    </form>

    <h2>Uploaded PDFs</h2>
    <ul>
        <?php
        // Fetch the list of uploaded PDF files
        $uploadDir = "uploads/";
        $uploadedFiles = glob($uploadDir . "*.pdf");
        foreach ($uploadedFiles as $file) {
            $filename = basename($file);
            echo '<li><a href="download_pdf.php?file=' . $filename . '">' . $filename . '</a></li>';
        }
        ?>
    </ul>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle the PDF upload using AJAX
            $("#uploadButton").click(function() {
                var formData = new FormData($("#pdfUploadForm")[0]);

                $.ajax({
                    url: "<?php echo $_SERVER['PHP_SELF']; ?>",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert(response); // Display the server's response (e.g., success message)
                        // Refresh the list of uploaded PDFs
                        $.ajax({
                            url: "fetch_pdfs.php", // Separate PHP script to fetch the updated list of PDFs
                            type: "GET",
                            dataType: "html",
                            success: function(data) {
                                $("#uploadedPDFs").html(data);
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>

