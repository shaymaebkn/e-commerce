
<?php 
 include_once 'connect/myconnect.php';

if(isset($_POST['add'])){
   
   
=======
<?php
  session_start();

  if(isset($_POST['add'])){
    include_once 'connect/connect.php';
    
    $quantity = $_POST['quantity'];
    $id=$_POST['id'];
    $customerCode = $_POST['customerCode'] ;
    $deliveryAddress= $_POST['adress'];

    // if(!empty($_SESSION['cart'])){
    //   while($_SESSION['cart']){
    //     if($id == $_SESSION['cart'][0]){
    //       $exist = true;
    //       break;
    //     }
    //     else{
    //       $exist = false;
    //     }
    //   }
    // }

    array_push($_SESSION['cart'], array($id,$quantity));
      
    // $statement = $bd->prepare("INSERT INTO `orders`(`customerCode`, `deliveryAddress`) VALUES (?,?);");
    // $result = $statement->execute([$customerCode, $deliveryAddress]);


    // $statements = $bd->prepare("INSERT INTO `orderdetails`( `productID`, `orderedQuantity`) VALUES (?,?);");
    // $results = $statements->execute([$id, $quantity]);
    // if ($result === TRUE && $results === TRUE) {      
    //   header('Location: index.php?mensaje=registrado'); 
    // }
    // else {
    //   header('Location: index.php?mensaje=error');
    //   exit();  
    // }
    header("Location: add.php?id=$id");
  }
?>

