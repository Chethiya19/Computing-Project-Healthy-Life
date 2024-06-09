<!DOCTYPE html>
<html>
<head>
    <title>Userform List</title>
</head>
<body>
    <?php
    include_once "../config/DB.php";

    // Fetch userform records from the database
    $sql = "SELECT form_id, pdf FROM tbl_userform";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Userform List</h1>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            $form_id = $row['form_id'];
            $filename = $row['pdf'];

            // Display view and download links for each userform record
            echo '<li>';
            echo '<a href="userform.php?form_id=' . $form_id . '">' . $filename . '</a>';
            echo '</li>';
        }
        echo "</ul>";
    } else {
        echo "No userforms found.";
    }

    $conn->close();
    ?>
</body>
</html>
