<div>
    <h3>Pressure Food Schedules</h3>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">S.N</th>
                <th class="text-center">Breakfast</th>
                <th class="text-center">Lunch</th>
                <th class="text-center">Dinner</th>
                <th class="text-center">Instructions</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <?php
        include_once "../config/DB.php";
        $sql = "SELECT * FROM food_schedule_pressure";
        $result = $conn->query($sql);
        $count = 1;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $row["breakfast"] ?></td>
                    <td><?= $row["lunch"] ?></td>
                    <td><?= $row["dinner"] ?></td>
                    <td><?= $row["instructions"] ?></td>
                    <td><button class="btn btn-primary" style="height:40px" onclick="editFoodSchedule('<?= $row['id'] ?>')">Edit</button></td>
                    <td><button class="btn btn-danger" style="height:40px" onclick="deleteFoodSchedule('<?= $row['id'] ?>')">Delete</button></td>
                </tr>
                <?php
                $count = $count + 1;
            }
        }
        ?>
    </table>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
        Add Food Schedule
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Food Schedule</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" onsubmit="addFoodSchedules()" method="POST">
                        <div class="form-group">
                            <label for="breakfast">Breakfast</label>
                            <input type="text" class="form-control" name="breakfast" required>
                        </div>
                        <div class="form-group">
                            <label for="lunch">Lunch</label>
                            <input type="text" class="form-control" name="lunch" required>
                        </div>
                        <div class="form-group">
                            <label for="dinner">Dinner</label>
                            <input type="text" class="form-control" name="dinner" required>
                        </div>
                        <div class="form-group">
                            <label for="instructions">Instructions</label>
                            <textarea class="form-control" name="instructions" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Schedule</button>
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
