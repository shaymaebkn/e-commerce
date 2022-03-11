<?php include 'headerfooter/header.php'; ?>
<style><?php include 'cart_style.css'; ?></style>

<main>
    <section class="section1" id="section1">
        <div class="cart_list">
            <li>Cart</li>
            <li>Details</li>
            <li>Confirmation</li>
        </div>
        <div class="cart_title">
            <h1>Details :</h1>
        </div>
        <div class="container">
            <div class="pay_with">
                <h4>Pay with</h4>
                <input type="radio" checked>
                <img src="pics/visa.png" alt="visa" width="50px" height="50px">
            </div>
            <div class="ship_to">
                <h4>ship to</h4>
                <form action="cart_details.php" method="POST">
                <div class="deliver_adress">
                    <input type="radio" name="adress" checked><label>Adress</label><br>
                    <input type="text" name="deliver_adress" placeholder="Adress">
                </div>
            </div>
        </div>
        <button class="next_button">Next</button></form>
    </section>
</main>

<?php include 'headerfooter/footer.php'; ?>