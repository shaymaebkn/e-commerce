<?php include 'headerfooter/header.php'; ?>
<style>
    <?php 
        include 'cart_style.css';
        $items = count($_SESSION['cart']);
    ?>
</style>

<main>
    <section class="section1" id="section1">
        <div class="cart_list">
            <li>Cart</li>
            <li>Details</li>
            <li>Confirmation</li>
        </div>
        <div class="cart_title">
            <h1>Confirmation :</h1>
        </div>
        <div class="container">
            <div class="subtotal">
                <p>Subtotal</p>
                <p><?php echo $items; ?></p>
                <p><?php echo $_SESSION['total']; ?></p>
            </div>
        </div>
    </section>

</main>
<?php include 'headerfooter/footer.php'; ?>