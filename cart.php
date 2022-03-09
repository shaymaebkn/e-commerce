<?php
    include 'headerfooter/header.php';
?>
<style><?php include 'cart_style.css'; ?></style>
<main>
    <section class="section1">
            <div class="cart_list">
                    <li>Cart</li>
                    <li>Details</li>
                    <li>Confirmation</li>
            </div>
            <div class="cart_title">
                <h1>CART :</h1>
            </div>
            <div class="cart_table">
                <table class="table">
                    <thead>
                        <th>Product</th>
                        <th>Price/un</th>
                        <th>QTE</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <?php 
                            include 'connect/myconnect.php';
                            $sql = "SELECT orderdetails.orderedQuantity, products.productName, products.unitPrice FROM orderdetails INNER JOIN products ON orderdetails.productID=products.productID WHERE orderID='1';";
                            $result = mysqli_query($connect, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            $total = 0;

                            if ($resultCheck > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['productName']; ?></td>
                            <td><?php echo $row['unitPrice']; ?></td>
                            <td><?php echo $row['orderedQuantity'] ?></td>
                            <td><?php echo $row['orderedQuantity'] * $row['unitPrice']; ?></td>
                            <td><?php echo '<a class="delete">X</a>';?></td>
                        </tr>
                        <?php
                            $total += $row['orderedQuantity'] * $row['unitPrice'];
                                }
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <td colspan="3" align="center">Subtotal before delevry charges</td>
                        <td><?php echo $total; ?></td>
                    </tfoot>
                </table>
            </div>
            <div class="next">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"><button class="next_button" type="submit">Next</button></form>
                <?php
                    $quantity = $_POST['quantity'];
                    $sql = "UPDATE orderDetails SET orderedQuantity='$quantity' WHERE orderID='1' AND productID='3';";
                    mysqli_query($connect, $sql);
                ?>
            </div>

    </section>
</main>

<?php
   include 'headerfooter/footer.php';
?>