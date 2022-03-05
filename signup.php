<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <style>
    body{
        background-image : url(pics/pmv-chamara-sCFL6R7loQk-unsplash.jpg);
        background-size: cover;
      }</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'headerfooter/header.php';
    ?>
    <div class="text-center">
    <h1 class="m-5">SIGN UP</h1></div>
<form  class="container">
<div class="row mb-3">
  <div class="col">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname">
    </div>

    <div class="col">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname">
    </div>
    </div>

    <div class="row mb-3">
    <div class="col">
    <label for="adress" class="form-label">Adress</label>
    <input type="text" class="form-control" id="adress">
    </div>

    <div class="col">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone">
    </div>
    </div>  

    <div class="col mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
    </div>

    <div class="row mb-3">
    <div class="col">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>

    <div class="col">
    <label for="password" class="form-label">Confirm password</label>
    <input type="password" class="form-control" id="password">
    </div>
    </div>

</form>

    <div class="text-center">
  <button type="submit" style="background-color:#FFB3C6;" class="mt-5 btn-lg">SIGN UP</button>
  <p class="mt-2 mb-5">You have an account already? <a href="login.php" class="text-primary">Log in</a></p>
</div>

<?php
    include 'headerfooter/footer.php';
    ?>
</body>
</html>