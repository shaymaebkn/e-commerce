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
                        <th>Tota</th>
                    </thead>
                    <tbody>
                        <?php 
                            include 'connect/myconnect.php';
                            $sql = "SELECT productName,unitPrice,orderedQuantity FROM products,orderdetails WHERE orderID='1'";
                            $result = mysqli_query($connect, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0){
                                 ($row = mysqli_fetch_assoc($result))
                        ?>
                        <td><?php echo $row['productName']; ?></td>
                        <td><?php echo $row['unitPrice']; ?></td>
                        <td><?php echo $row['orderedQuantity']; ?></td>
                        <td><?php echo $row['orderedQuantity'] * $row['unitPrice']; ?></td>
                        <?php 
                                }
                        
                        ?>
                    </tbody>
                    <tfoot>
                        <td colspan="3" align="center">Subtotal before delevry charges</td>
                        <td>Total</td>
                    </tfoot>
                </table>
            </div>
            <div class="next">
                <button class="next_button">Next</button>
            </div>

    </section>
</main>

<?php
   include 'headerfooter/footer.php';
?>