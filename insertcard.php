<?php 


if(isset($_POST['add'])){
    include_once 'connect/connect.php';
   
    $quantity = $_POST['quantity'];
    $id=$_POST['id'];
    $customerCode = $_POST['customerCode'] ;
    $deliveryAddress= $_POST['adress'];
    
    
    $statement = $bd->prepare("INSERT INTO `orders`(`customerCode`, `deliveryAddress`) VALUES (?,?);");
    $result = $statement->execute([$customerCode, $deliveryAddress]);


  $statements = $bd->prepare("INSERT INTO `orderdetails`( `productID`, `orderedQuantity`) VALUES (?,?);");
  $results = $statements->execute([$id, $quantity]);
 if ($result === TRUE && $results === TRUE) {      
     header('Location: add.php?mensaje=registrado'); 
     }
      else {
     header('Location: index.php?mensaje=error');
     exit();  
    }
 }
?>

