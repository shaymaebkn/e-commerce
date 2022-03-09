<?php 

if(isset($_POST['add'])){
     
    include_once 'connect/connect.php';
   

    $customerCode = $_POST['customerCode'] ;
    $deliveryAddress= $_POST['adress'];
    $quantity = $_POST['quantity'];
    
    $statement = $bd->prepare("INSERT INTO `orders`(`customerCode`, `deliveryAddress`) VALUES (?,?);");
    $result = $statement->execute([$customercode, $deliveryAddress]);


 if ($result === TRUE) {      
     header('Location: add.php?mensaje=registrado'); 
     }
      else {
     header('Location: add.php?mensaje=error');
     exit();  
    }

 }
?>


