<!DOCTYPE html>
<html>
<head>
  <title>Food Schedule</title>
  <link href="Images/logo.png" rel="icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    h1 {
      text-align: center;
    }
    .container {
      padding: 10px;
      position: relative;
    }
    body {
      background-color: #CAF5E8;
    }
    .container1 {
      padding: 10px;
      align: center;
    }
    .row {
      padding-left: 600px;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "userform";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbl_userform ORDER BY form_id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $patientType = $row['diseases'];

      $foodScheduleTable = '';
      if ($patientType === 'Diabetes') {
        $foodScheduleTable = 'food_schedule_diabetes';
        $imageId = 1;
      } elseif ($patientType === 'Pressure') {
        $foodScheduleTable = 'food_schedule_pressure';
        $imageId = 2;
      } elseif ($patientType === 'Cholesterol') {
        $foodScheduleTable = 'food_schedule_cholesterol';
        $imageId = 3;
      } elseif ($patientType === 'Diabetes, Pressure') {
        $foodScheduleTable = 'fs_diabetes_pressure';
        $imageId = 4;
      } elseif ($patientType === 'Diabetes, Cholesterol') {
        $foodScheduleTable = 'fs_diabetes_cholesterol ';
        $imageId = 5;
      } elseif ($patientType === 'Pressure, Cholesterol') {
        $foodScheduleTable = 'fs_pressure_cholesterol';
        $imageId = 6;
      } elseif ($patientType === 'Diabetes, Pressure, Cholesterol') {
        $foodScheduleTable = 'fs_diabetes_pressure_cholesterol';
        $imageId = 7;
      } else {
        $foodScheduleTable = '';
        $imageId = 0; 
      }

      if ($foodScheduleTable !== '') {
        $foodScheduleSql = "SELECT * FROM $foodScheduleTable";
        $foodScheduleResult = mysqli_query($conn, $foodScheduleSql);

        if (mysqli_num_rows($foodScheduleResult) > 0) {
          echo "<div class='container'>";
          echo "<h1>Food Schedule for $patientType Patients</h1>";
          echo "<div class='table-responsive'>";
          echo "<table class='table table-striped'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Breakfast</th>";
          echo "<th>Lunch</th>";
          echo "<th>Dinner</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";

          while ($foodScheduleRow = mysqli_fetch_assoc($foodScheduleResult)) {
            echo "<tr>";
            echo "<td>" . $foodScheduleRow['breakfast'] . "</td>";
            echo "<td>" . $foodScheduleRow['lunch'] . "</td>";
            echo "<td>" . $foodScheduleRow['dinner'] . "</td>";
            echo "</tr>";
          }

          echo "</tbody>";
          echo "</table>";
          echo "</div>";
          echo "</div>";
        } else {
          echo "No food schedule available for $patientType patients.";
        }
      } else {
        echo "No valid patient type found.";
      }
    } else {
      echo "No patient data available.";
    }

    mysqli_close($conn);
    ?>

    <br>

    <div class="container">
      <h1 class="text-center">Instructions for <?php echo $patientType; ?> Patients</h1>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Instructions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "userform";

            $conn = mysqli_connect($host, $username, $password, $database);

            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            if ($foodScheduleTable !== '') {
              $foodScheduleSql = "SELECT * FROM $foodScheduleTable";
              $foodScheduleResult = mysqli_query($conn, $foodScheduleSql);

              if (mysqli_num_rows($foodScheduleResult) > 0) {
                while ($foodScheduleRow = mysqli_fetch_assoc($foodScheduleResult)) {
                  echo "<tr>";
                  echo "<td><ul><li>" . $foodScheduleRow['instructions'] . "</ul></li></td>";
                  echo "</tr>";
                }
              } else {
                echo "<tr><td>No instructions available for $patientType patients.</td></tr>";
              }
            } else {
              echo "<tr><td>No valid patient type found.</td></tr>";
            }

            mysqli_close($conn);
            ?>
          </tbody>
        </table>
      </div>
    </div>

    
  </div>
  <div class="container1">
    <h1 class="text-center">Download Your Report</h1>
    <div class="row">
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

      // Retrieve images from the database
      $stmt = $pdo->query('SELECT * FROM images');
      $images = $stmt->fetchAll();

      foreach ($images as $image) {
        $imageId = $image['id'];
        $imageName = $image['name'];

        // Display download button only for relevant image
        if (($patientType === 'Diabetes' && $imageId === 1)
            || ($patientType === 'Pressure' && $imageId === 2)
            || ($patientType === 'Cholesterol' && $imageId === 3)
            || ($patientType === 'Diabetes, Pressure' && $imageId === 4)
            || ($patientType === 'Diabetes, Cholesterol' && $imageId === 5)
            || ($patientType === 'Pressure, Cholesterol' && $imageId === 6)
            || ($patientType === 'Diabetes, Pressure, Cholesterol' && $imageId === 7)) {
          echo "<div>
                  <div class='card'>
                    <div class='card-body text-align:center;'>
                      <span>$imageName</span>&nbsp;&nbsp;&nbsp;
                      <a href='imagedownload.php?image_id=$imageId' class='btn btn-primary'>Download</a>
                    </div>
                  </div>
                </div>";
        }
      }
      ?>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
