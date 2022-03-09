<?php

    include_once 'connect/connect.php';


    $id = $_POST['id'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $pic = $_POST['picture'];
    $statement = $bd->prepare("INSERT INTO `products`( `productName`, `description`, `unitPrice`, `quantityInStock`, `image`) 
                               VALUES (?,?,?,?,?)");
    $result = $statement->execute([$first_name,$last_name,$department,$salary,$pic]);

    if ($result === TRUE) {
        header('Location: form.php?mensaje=registrado');
    } else {
        header('Location: form.php?mensaje=error');
        exit();
    }
    
?>
