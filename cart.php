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
                        <th>Products</th>
                        <th>Price/un</th>
                        <th>QTE</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <td>tes</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
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