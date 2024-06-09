<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
            </tr>
        </thead>
        <?php
        include_once "../config/dbconnect.php";
        $ID = $_GET['orderID'];
        //echo $ID;
        $sql = "SELECT * FROM tbl_orders 
                JOIN customer ON tbl_orders.customer_id = customer.customer_id
                WHERE tbl_orders.order_id = $ID";
        $result = $conn->query($sql);
        $count = 1;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $od_id = $row['order_id'];
                ?>
                <tr>
                    <?php
                    $subqry = "SELECT * FROM tbl_order_details 
                               JOIN product ON product.product_id = tbl_order_details.product_id
                               WHERE tbl_order_details.order_id = $od_id";
                    $res = $conn->query($subqry);
                    if ($res->num_rows > 0) {
                        while ($row2 = $res->fetch_assoc()) {
                    ?>
                            <td><?= $count ?></td>
                            <td><img height="80px" src="<?= $row2["product_image"] ?>"></td>
                            <td><?= $row2["product_name"] ?></td>
                            <td><?= $row2["product_quantity"] ?></td>
                            <td>&#8360; <?= $row2["price"] ?></td>
                </tr>
            <?php
                            $count++;
                        }
                    } else {
                        echo "<td colspan='5'>No products found for order ID: $od_id</td>";
                    }
                }
            } else {
                echo "<tr><td colspan='5'>No orders found for order ID: $ID</td></tr>";
            }
            ?>
    </table>
</div>
