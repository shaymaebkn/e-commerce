<?php
    session_start();
    include 'connect/myconnect.php';
    $orderID = $_GET['orderID'];
    $productID = $_GET['productID'];
    // for($i=0; $i<count($_SESSION['cart']); $i++){
    //     if($productID == $_SESSION['cart'][$i][0]){
    //         unset($_SESSION['cart'][$i]);
    //     }
    // }
    // if (($key = array_search($_SESSION['cart'][$i], $_SESSION['cart'])) !== false) {
    //     unset($_SESSION['cart'][$i]);
    // }
    header("Location: cart.php" );
?>