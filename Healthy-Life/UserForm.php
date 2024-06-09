<!DOCTYPE html>
<html>
<head>
    <title>Personal Details Form</title>
    <link href="Images/logo.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .form-row {
            margin-bottom: 20px;
        }

        h1 {
            background-color: #6AEF28;
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 30px;
        }

        .custom-checkbox .custom-control-label::before {
            border-color: #4AA91B;
            background-color: #6AEF28;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            border-color: #449C18;
            background-color: #6AEF28;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
            border-color: #449C18;
            background-color: #449C18;
        }

        .custom-file-label::after {
            border-color: #449C18;
            background-color: #6AEF28;
        }

        .btn-submit {
            background-color: #6AEF28;
            border-color: #4AA91B;
        }

        .btn-submit:hover {
            background-color: #449C18;
            border-color: #449C18;
        }

        .btn-clear {
            background-color: #C1CDBB;
            border-color: #5F645D;
            color: black;
        }

        .btn-clear:hover {
            background-color: #8D958A;
            border-color: #f2f2f2;
            color: black;
        }
        .btn-view{
            background-color: #2AED80;
            border-color: #e6e6e6;
            color: #555;
        }
        .btn-view:hover {
            background-color: #f2f2f2;
            border-color: #f2f2f2;
            color: #555;
        }
    </style>
</head>
<body>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "userform";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_email = $_POST["email"];
    $user_id = null;

    $user_query = "SELECT user_id FROM users WHERE email = '$user_email'";
    $result = mysqli_query($conn, $user_query);

    if (mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        $user_id = $user_data["user_id"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $birthday = $_POST["birthday"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $district = $_POST["district"];
        $phone = $_POST["phone"];
        $diseases = implode(", ", $_POST["diseases"]);
        $allergies = $_POST["allergies"];
        $terms = $_POST["terms"];
        
        // File upload
        $pdf_name = $_FILES['pdf']['name'];
        $pdf_tmp = $_FILES['pdf']['tmp_name'];
        $pdf_path = "uploads/" . $pdf_name;

        move_uploaded_file($pdf_tmp, $pdf_path);
    
    
    $sql = "INSERT INTO tbl_userform (user_id, firstname, lastname, email, birthday, age, gender, address, district, phone, diseases, allergies, terms, pdf) VALUES ('$user_id', '$firstname', '$lastname', '$email', '$birthday', '$age', '$gender', '$address', '$district', '$phone', '$diseases', '$allergies', '$terms', '$pdf_path')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success' style='position: relative;'>Form submitted successfully.";
        echo "<a href='schedulefood.php'>";
        echo "<button type='button' class='btn btn-view' style='position: absolute; top: 5px; right: 10px;'>View Your Food Schedule Sheet</button>";
        echo "</a>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }

    mysqli_close($conn);
}}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["pdf"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["pdf"]["name"]);
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
        if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["pdf"]["name"]) . " has been uploaded successfully.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


    <div class="container">
        <h1>User Form</h1>

        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" name="age" id="age" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" required>
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" required>
                    <label class="form-check-label">Female</label>
                </div>
            </div>

            <h2>Contact Details</h2>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" id="address" required>
            </div>

            <div class="form-group">
                <label for="district">District:</label>
                <select class="form-control" name="district" id="district" required>
                    <option value="Colombo">Colombo</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Mathale">Mathale</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Galle">Galle</option>
                    <option value="Mathara">Mathara</option>
                    <option value="Hambanthota">Hambanthota</option>
                    <option value="Rathnapura">Rathnapura</option>
                    <option value="Kegalle">Kegalle</option>
                    <option value="Anuradhapura">Anuradhapura</option>
                    <option value="Polonnaruwa">Polonnaruwa</option>
                    <option value="Kurunegale">Kurunegale</option>
                    <option value="Puttalam">Puttalam</option>
                    <option value="Badulla">Badulla</option>
                    <option value="Monaragala">Monaragala</option>
                    <option value="Trincolmalee">Trincolmalee</option>
                    <option value="Ampara">Ampara</option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kilinochchi">Kilinochchi</option>
                    <option value="Mullaitivu">Mullaitivu</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Vavuniya">Vavuniya</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required>
            </div>

            <h2>Important</h2>

            <div class="form-group">
                <label for="diseases">Diseases:</label>
                <div class="custom-checkbox">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="diseases[]" value="Diabetes">
                        <label class="form-check-label">Diabetes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="diseases[]" value="Pressure">
                        <label class="form-check-label">Pressure</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="diseases[]" value="Cholesterol">
                        <label class="form-check-label">Cholesterol</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="allergies">Allergies:</label>
                <textarea class="form-control" name="allergies" id="allergies" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="pdf">Upload PDF:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="pdf" id="pdf">
                    <label class="custom-file-label" for="pdf">Choose file</label>
                </div>
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="terms" id="terms" required>
                    <label class="custom-control-label" for="terms">I agree to the terms and conditions</label>
                </div>
            </div>

            <button type="submit" class="btn btn-submit">Submit</button>
            <button type="reset" class="btn btn-clear">Clear</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
