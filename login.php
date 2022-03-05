<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <style>
      body{
        background-image : url(pics/pmv-chamara-sCFL6R7loQk-unsplash.jpg);
        background-size: cover;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'headerfooter/header.php';
    ?>



    <div class="text-center">
    <h1 class="m-5">SIGN IN</h1>
    </div>


<div class="container" >

<div class="mb-3 row">
    <label for="email" class="form-label">Email :</label>
    <input type="email" class="form-control-lg" id="email">
    </div>

    <div class="row">
    
    <label for="password" class="form-label">Password :</label>
    <input type="password" class="form-control-lg" id="password">
  </div>

</div>
    

    <div class="text-center">
  <button type="submit" style="background-color:#FFB3C6;" class="mt-5 btn-lg">LOGIN</button>
  <p class="mt-2 mb-5">Don’t have an account yet? <a href="signup.php" class="text-primary">Sign-up</a> now</p>
</div>

<!-- <div class="has-bg-img">
    <img src="pics/pmv-chamara-sCFL6R7loQk-unsplash.jpg" alt="..." class="bg-img">
    </div> -->
<?php
    include 'headerfooter/footer.php';
    ?>
</body>
</html>