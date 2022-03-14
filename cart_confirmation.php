<?php
    session_start();
    include 'headerfooter/header.php'; 
    $items = count($_SESSION['cart']);
    $_SESSION['adress'] = $_POST['deliver_adress'];
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
            <h1>Confirmation :</h1>
        </div>
        <div id="container" class="p-7">
            <div class="subtotal">
                <p>Subtotal</p>
                <p><?php echo "(". $items. " items)"; ?></p>
                <p><?php echo $_SESSION['total'] . " dhs"; ?></p>
            </div>
            <div class="shipping">
                <p>shipping charges</p>
                <p>FREE</p>
            </div>
            <div class="total">
                <p><b>Order Total</b></p>
                <p><?php echo $_SESSION['total'] . " dhs"; ?></p>
            </div>
            <p id="user_agreement">By placing your order you agree to our <a href="#">User agreement</a></p>
            <div class="confirm">
                <form action="add_order.php"><button class="confirm_button" type="submit">Confirm</button></form>
            </div>
        </div>
    </section>
</main>

<?php include 'headerfooter/footer.php'; ?>