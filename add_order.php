<?php
    session_start();
    include 'connect/myconnect.php';
    $customerCode = $_SESSION['customerCode'];
    $orderDate = date("Y-m-d h:i:sa");
    $deliveryAddress = $_SESSION['adress'];


    $sql = "INSERT INTO orders (customerCode, orderDate, deliveryAddress) VALUES ('$customerCode', '$orderDate', '$deliveryAddress');";
    mysqli_query($connect, $sql);

    $sql2 = "SELECT  orderID FROM orders order by orderID desc limit 1;";
    $result = mysqli_query($connect, $sql2);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        $row = mysqli_fetch_assoc($result) ;
        $orderID = $row['orderID'];
    }
    for($i=0; $i<count($_SESSION['cart']); $i++){
        $productID = $_SESSION['cart'][$i][0];
        $orderedQuantity = $_SESSION['cart'][$i][1];
        $sql3 = "INSERT INTO orderDetails (orderID, productID, orderedQuantity) VALUES ('$orderID', '$productID', '$orderedQuantity');";
        mysqli_query($connect, $sql3);
    }
    $_SESSION['cart'] = [];
    header("Location: confirmed_order.php");
?>