<div >
  <h2>Delivery Boys</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone Number</th>
        <th class="text-center">Address</th>
        <th class="text-center">Vehicle Number</th>
        <!-- <th class="text-center">Hire Date</th> -->
        <!-- <th class="text-center">Active</th> -->
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from deliveryboy ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["first_name"]?> <?=$row["last_name"]?></td>
      <td><?=$row["email"]?></td>    
      <td><?=$row["phone_number"]?></td> 
      <td><?=$row["address"]?></td>    
      <td><?=$row["vehicle_number"]?></td>
      <!-- <td><?=$row["hire_date"]?></td> -->
      <!-- <td><?=$row["active"]?></td> -->
      <td><button class="btn btn-primary" style="height:40px" onclick="DeliveryboyEditForm('<?=$row['deliveryboy_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="DeliveryboyDelete('<?=$row['deliveryboy_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Delivery Boy
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Delivery Boy</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form enctype='multipart/form-data' onsubmit="addDeliveryboy()" method="POST">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="f_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="l_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" class="form-control" id="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" required>
                    </div>
                    <div class="form-group">
                        <label for="vehicle_number">Vehicle Number:</label>
                        <input type="text" class="form-control" id="vehicle_number" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Deliveryboy</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
            </div>
        </div>

    </div>
</div>


  
</div>
   