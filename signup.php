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
      }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once('connect/connect.php');
    include 'headerfooter/header.php';
?>
<?php
    if(isset($_POST['signUP'])){
      $firstname = $_POST['firstName'];
      $lastname = $_POST['lastName'];
      $adress = $_POST['adress'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];
  
       $sql="INSERT INTO `customers`(`firstName`, `lastName`, `adress`, `phone`, `email`, `password`) 
       VALUES ('[$firstname]','[$lastname]','[$adress]','[$phone]','[$email]','[$password]')";
      $query = $bd->prepare($sql);
       $result = $query->execute([$firstname],[$lastname],[$adress],[$phone],[$email],[$password]);
       if($result){
         echo 'working';
       }else{
         echo 'not workingg';
       }}
  
    ?>
    

    <div class="text-center">
    <h1 class="m-5">SIGN UP</h1></div>

<form action="signup.php" method="post" class="container">
<div class="row mb-3">
  <div class="col">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" name="firstName" required>
    </div>

    <div class="col">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lastName" required>
    </div>
    </div>

    <div class="row mb-3">
    <div class="col">
    <label for="adress" class="form-label">Adress</label>
    <input type="text" class="form-control" name="adress" required>
    </div>

    <div class="col">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" required>
    </div>
    </div>  

    <div class="col mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" required>
    </div>

    <div class="row mb-3">
    <div class="col">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>

    <div class="col">
    <label for="password" class="form-label">Confirm password</label>
    <input type="password" class="form-control" name="password" required>
    </div>
    </div>



    <div class="text-center">
  <button type="submit" name="signUP" value="" style="background-color:#FFB3C6;" class="mt-5 btn-lg">SIGN UP</button>
  <p class="mt-2 mb-5">You have an account already? <a href="login.php" class="text-primary">Log in</a></p>
</div>
</form>

<?php
    include 'headerfooter/footer.php';
    ?>
</body>
</html>