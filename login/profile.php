<?php
include 'connect.php';
session_start(); 
if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

    $query=mysqli_query($con,"SELECT * FROM `customers` WHERE email='?'");

?>
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

    <header>
        <?php
        include 'header.php';
        
        ?>
    </header>    
    <body>    
    <form action="main.php"  method="post">

        <div class="text-center">
            <h1 class="m-5">Profile</h1>
        </div>
        

            <div class="mb-3 row">
            <?php if(isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            </div>
        <div id="classe" class="container d-flex justify-content-center" >
                <div >
                    <div class="d-flex">   
                    <h5 for="firstname" class="form-label">First Name :</h5>
                    <p><?php echo $_SESSION['firstName'];?></p>
                    </div> 

                    <div  class="d-flex">
                    <h5 for="lastname" class="form-label">Last Name :</h5>
                    <p><?php echo $_SESSION['lastName'];?></p>
                    </div>

                    <div  class="d-flex">
                    <h5 for="adress" class="form-label">Adress: </h5>
                    <p><?php echo $_SESSION['adress'];?></p>
                    </div>
                </div>
                <div>
                    <div  class="d-flex ">
                    <h5 for="phone" class="form-label">Phone Number: </h5>
                    <p><?php echo $_SESSION['phone'];?></p>
                    </div>

                    <div  class="d-flex">
                    <h5 for="email" class="form-label">Email :</h5>
                    <p><?php echo $_SESSION['email'];?></p>
                    </div>

                    <div class="d-flex">
                    <h5 for="password" class="form-label">Password :</h5>
                    <p ><?php echo $_SESSION['password'];?></p>
                    </div>
           
            </div>
        </div>
             </div>
            <div class="text-center">
            <button type="submit" name="edit" style="background-color:#FFB3C6;" class="mt-5 btn-lg">Edit Profile</button>
            <button type="submit"  href="logout.php" name="logout" style="background-color:#FFB3C6;" class="mt-5 btn-lg">Log Out</button>

    </form>
 

 


<?php
include 'footer.php';
?>



    <div class="alert alert-success" id="alertt" role="alert">
  <h4 class="alert-heading">Welcome  : <?php echo $_SESSION['firstName']; echo " ";echo $_SESSION['lastName'];?></h4>
  <p> You are logged in successfully</p>
  <hr>
  <button class="btn btn-primary btn-lg"><a href="../cart.php"  class="text-light"  >Voir le Panier</a></button>
  <button class="btn btn-danger btn-lg"><a href="logout.php" class="text-light" >Log Out</a></button>
</div>
    


<?php
    }
else{
header('location:main.php');
}
?>