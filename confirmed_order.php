<?php
    session_start();
    include 'headerfooter/header.php';
?>
<style><?php include 'cart_style.css';?></style>
<main>
    <section class="section1" id="section1">
        <div class="cart_list">
            <li style="background-color: #E6DDD6;">Cart</li>
            <li style="background-color: #E6DDD6;">Details</li>
            <li style="background-color: #E6DDD6;">Confirmation</li>
        </div>
        <div class="cart_title">
            <h1>Confirmed :</h1>
        </div>
        <div class="cont">
            <div>
                <h3>Thank you for purchasing our product <br>a confirmation msg sent to your email</h3>
            </div>
            <div>
                <form action="index.php"><button class="confirm_button" type="submit">HOME</button></form>
            </div>
            
        </div>
        
    </section>
</main>

<?php include 'headerfooter/footer.php'; ?>