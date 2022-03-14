<?php include 'headerfooter/header.php'; ?>
<style><?php include 'cart_style.css'; ?></style>

<main>
    <section class="section1" id="section1">
        <div class="cart_list">
            <li style="background-color: #E6DDD6;">Cart</li>
            <li style="background-color: #E6DDD6;">Details</li>
            <li>Confirmation</li>
        </div>
        <div class="cart_title">
            <h1>Details :</h1>
        </div>
        <div class="container" style="border: 2px solid black;">
            <div class="pay_with" >
                <h5 >Pay with</h5>
                <input type="radio" checked>
                <img src="pics/visa.png" alt="visa" width="50px" height="50px">
            </div>
            <div class="ship_to">
                <h5 >Ship to</h5>
                <form action="cart_confirmation.php" method="POST">
                <div class="deliver_adress">
                    <input type="radio" name="adress" checked><label>Adress</label><br><br>
                    <input type="text" name="deliver_adress" placeholder=" your Adress"  style="border-radius: 9px;" required>
                    <span class="error">*</span>
                </div>
            </div>
        </div>
        <button class="next_button">Next</button></form>
    </section>
</main>

<?php include 'headerfooter/footer.php'; ?>