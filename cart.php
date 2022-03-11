<?php
    include 'headerfooter/header.php';
?>
<style><?php include 'cart_style.css'; ?></style>
<!-- <?php 
    // if(session_status() === PHP_SESSION_NONE){
    //     echo "<script>
    //             let nav2 = document.getElementById('nav2');
    //             nav2.innerHTML = '<p>You have to <a href="."login/signup.php".">SIGN-UP</a> or <a href="."login/login.php".">LOGIN</a> to make a purchase</p>'
    //         </script>";
    // }
    // else{
    //     "<script>
    //             let nav2 = document.getElementById('nav2');
    //             nav2.innerHTML = '<p>You have to <a href="."login/signup.php".">SIGN-UP</a> or <a href="."login/login.php".">LOGIN</a> to make a purchase</p>'
    //         </script>";
    // }
?> -->
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
                            $sql = "SELECT orderdetails.orderID, orderdetails.productID, orderdetails.orderedQuantity, products.productName, products.unitPrice FROM orderdetails INNER JOIN products ON orderdetails.productID=products.productID WHERE orderID='2';";
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
                                <td><?php echo '<a class="delete" href="deletOrder.php?orderID='.$row['orderID'].'&productID='.$row['productID'].'">X</a>';?></td>
                            </tr>
                            <tfoot>
                            <td colspan="3" align="center">Subtotal before delevry charges</td>
                            <td><?php echo $total; ?></td>
                            </tfoot>
                        <?php
                            $total += $row['orderedQuantity'] * $row['unitPrice'];
                                }
                            }
                            else{
                                echo '<td colspan="5" align="center">You have no products in your shopping cart</td>';
                            }
                        ?>
                    </tbody>
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