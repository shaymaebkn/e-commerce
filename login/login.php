<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexx</title>
    <style>
    body{
        background-image : url(../pics/pmv-chamara-sCFL6R7loQk-unsplash.jpg);
        background-size: cover;
      }
      .error{
          color:red;
          font-size:25px;
          background:yellow;
            
      }
      </style>
</head>
<body>
    
     <?php
    include 'header.php';
    include 'connect.php';
    ?>
    
<form action="main.php" method="post">

<div class="text-center">
<h1 class="m-5">SIGN IN</h1>
</div>


<div class="container" >

<div class="mb-3 row">
    <?php if(isset($_GET['error'])) { ?>

     <p class="error"><?php echo $_GET['error']?></p>
     <?php } ?>
  
    
<label for="email" class="form-label">Email :</label>
<input type="email" class="form-control-lg" name="email" >
</div>

<div class="row">

<label for="password" class="form-label">Password :</label>
<input type="password" class="form-control-lg" name="password" >
</div>

</div>


<div class="text-center">
<button type="submit" name="login" style="background-color:#FFB3C6;" class="mt-5 btn-lg">LOGIN</button>
<p class="mt-2 mb-5">Don’t have an account yet? <a href="signup.php" class="text-primary">Sign-up</a> now</p>
</div>
</form>

<?php
include 'footer.php';
?>
</body>
</html>