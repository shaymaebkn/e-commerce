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
    <style>
        body{
            background-color:yellow;
        }
    </style>
</head>
<body>

    <h1> Hello : <?php echo $_SESSION['firstName']; ?></h1>
    <button><a href="main.php">LOG OUT Here !</a></button>
    
</body>
</html>

<?php
}else{
header('location:main.php');
}
?>