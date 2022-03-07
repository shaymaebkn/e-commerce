<?php

session_start(); 
if(isset($_SESSION['customerCode']) && isset($_SESSION['email'])) {


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

    <!-- <h1> Hello : <?php echo $_SESSION['firstName']; ?></h1>
    <button><a href="logout.php">LOG OUT Here !</a></button> -->

    <div class="alert alert-success" id="alertt" role="alert">
  <h4 class="alert-heading">مرحبا : <?php echo $_SESSION['firstName']; ?></h4>
  <p> تم تسجيل دخولك بنجاح</p>
  <hr>
</div>
    
</body>
</html>

<?php
}else{
header('location:main.php');
}
?>