<?php

session_start(); 
if(isset($_SESSION['password']) && isset($_SESSION['email'])) {


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
       #alertt{
            text-align:center;
            font-size:50px;
        }
        
    </style>
</head>
<body>

    

    <div class="alert alert-success" id="alertt" role="alert">
  <h4 class="alert-heading">Welcome  : <?php echo $_SESSION['firstName']; echo " ";echo $_SESSION['lastName'];?></h4>
  <p> You are logged in successfully</p>
  <hr>
  <button class="btn btn-primary btn-lg"><a href="../cart.php"  class="text-light"  >Voir le Panier</a></button>
  <button class="btn btn-danger btn-lg"><a href="logout.php" class="text-light" >Log Out</a></button>
</div>
    
</body>
</html>

<?php
}else{
header('location:main.php');
}
?>