<?php 
include'connect/connect.php';

if(isset($_POST['add'])){
     
    include_once 'login/connect.php';
    $sql="SELECT * FROM `customers` WHERE customerCode= ?;";
    $result=mysqli_query($con,$sql);

    $customercode = $_GET['customerCode'] ;
    $quantity = $_POST['quantity'];
    $deliveryAddress= $_GET['adress'];
    $id = $_GET['id'];

    $statement = $bd->prepare("INSERT INTO `orders`(`customerCode`, `deliveryAddress`) VALUES (?,?,?);");
    $result = $statement->execute([$customercode, $deliveryAddress]);
 }
?>
<!-- //  if ($result === TRUE) {
//      header('Location: index.php?mensaje=registrado');
//  } else {
//      header('Location: index.php?mensaje=error');
//      exit();
//  }

//  } -->

