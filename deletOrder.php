<?php
    include 'connect/myconnect.php';
    $orderID = $_GET['orderID'];
    $productID = $_GET['productID'];
    echo $orderID . ' X '. $productID ;
    $sql = "DELETE FROM orderdetails WHERE orderID='$orderID' AND productID='$productID';";
    mysqli_query($connect, $sql);
    header("Location: cart.php" )
?>