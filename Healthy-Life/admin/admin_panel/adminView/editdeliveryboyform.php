<div class="container p-5">

<h4>Edit Delivery Boy Detail</h4>
<?php
    include_once "../config/dbconnect.php";
    $ID = $_POST['record'];
    $qry = mysqli_query($conn, "SELECT * FROM deliveryboy WHERE deliveryboy_id = '$ID'");
    $numberOfRow = mysqli_num_rows($qry);
    if ($numberOfRow > 0) {
        while ($row = mysqli_fetch_array($qry)) {
?>
<form id="update-Items" onsubmit="updateDeliveryBoy()" enctype='multipart/form-data'>
    <div class="form-group">
        <input type="text" class="form-control" id="deliveryboy_id" value="<?=$row['deliveryboy_id']?>" hidden>
    </div>
    <div class="form-group">
        <label for="f_name">First Name:</label>
        <input type="text" class="form-control" id="fisrt_name" value="<?=$row['first_name']?>" required>
    </div>
    <div class="form-group">
        <label for="l_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" value="<?=$row['last_name']?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value="<?=$row['email']?>" required>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" class="form-control" id="phone_number" value="<?=$row['phone_number']?>" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" rows="3" required><?=$row['address']?></textarea>
    </div>
    <div class="form-group">
        <label for="vehicle_number">Vehicle Number:</label>
        <input type="text" class="form-control" id="vehicle_number" value="<?=$row['vehicle_number']?>" required>
    </div>
    <div class="form-group">
        <button type="submit" style="height:40px" class="btn btn-primary">Update Delivery Boy</button>
    </div>
</form>

<?php
        }
    }
?>
</div>
