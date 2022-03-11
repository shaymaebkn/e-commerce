<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <style>
    body{
        background-image : url(../pics/pmv-chamara-sCFL6R7loQk-unsplash.jpg);
        background-size: cover;
      }
      #rg{
        color:red;
        text-align:center;
        background-color:yellow;
      }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once('connect.php');
    include ('header.php');
    $message = "your email is already registed !";
    
?>
<?php
    if(isset($_POST['signUP'])){
      $firstname = $_POST['firstName'];
      $lastname = $_POST['lastName'];
      $adress = $_POST['adress'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $query=mysqli_query($con,"SELECT * FROM `customers` WHERE email='$email'");

      if(mysqli_num_rows($query)>0){
        echo "<script type='text/javascript'>alert('$message');</script>";
      
      
  }else{

  
       $sql="INSERT INTO `customers`(`firstName`, `lastName`, `adress`, `phone`, `email`, `password`) 
       VALUES ('$firstname','$lastname','$adress','$phone','$email','$password')";
      
       $result = mysqli_query($con,$sql);

       if($result){
        
        
        echo "<script type='text/javascript'>
        Swal.fire(
          'Your registration is successful!',
          '',
          'success',
        )
           
              </script>";
        
      }else{
        echo "<h1 id='rg'>your registration is NOT successful</h1>"; 
      }
        }
      }

  
    ?>
    

    
    

<form action="signup.php" method="post" class="container">
<!-- <div class="container" style="border: 2px solid #000000; border-radius: 10px; height: 45em; width: 82em;"> -->
<h1 class="m-5 text-center">SIGN UP</h1>
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

    <!-- <div class="col">
    <label for="password" class="form-label">Confirm password</label>
    <input type="password" class="form-control" name="password" required>
    </div> -->
    </div>



    <div class="text-center">
  <button type="submit" name="signUP" id="register" style="background-color:#FFB3C6;" class="mt-5 btn-lg">SIGN UP</button>
  <p class="mt-2 mb-5">You have an account already? <a href="login.php" class="text-primary">Log in</a></p>
</div>
<!-- </div> -->
</form>



</script>
<?php
    include 'footer.php';
    ?>
</body>
</html>