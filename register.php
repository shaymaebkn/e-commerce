
<?php

    include_once 'connect/connect.php';
    $id = $_POST['id'];
    $productID = $_POST['first-name'];
    $productName = $_POST['last-name'];
    $description = $_POST['date'];
    $unitPrice = $_POST['department'];
    $quantityinstock = $_POST['salary'];
    $pic = $_POST['picture'];

    $statement = $bd->prepare("INSERT INTO `products`(`productID`, `productName`, `description`, `unitPrice`, `quantityInStock`, `image`) VALUES
                                (?,?,?,?,?,?)");
    $result = $statement->execute([$productID,$productName,$description,$unitPrice,$quantityinstock,$pic]);

    if ($result === TRUE) {
        header('Location: form.php?message=registr');
    } else {
        header('Location: form.php?message=error');
        exit();
    }
    
?>



