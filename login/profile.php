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
            font-family: gotu;
        }
        .error{
            color:red;
            font-size:25px; 
            background:yellow;
                
        }
        h5,h1{

            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: bold;
        }
      
    </style>

    <header>
        <?php
        // include 'header.php';
        
        
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- bootstrap -->
    <link rel="stylesheet" href="../cart_style.css">
    <link rel="stylesheet" href="../style.css">
    <title>PaOn cosmetic</title>
</head>
<body>
    <header >
        <nav class="nav1" >
            <div class="burger" id="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="nav_links">
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li id="catalogue"><a href="#">CATALOGUE</a></li>
                    <li><a href="signup.php">SIGN-UP</a></li>
                </ul>
            </div>
            <div class="logo" id="logo">
                <a href="../index.php"><img src="../pics/logo.png" alt="paon" width="160px"></a>
            </div>
            <div class="icons" mt-2>
                <a href="#"><img src="../pics/search.png"></a>
                <a href="../cart.php"><img src="../pics/cart.png"></a>
                <a href="profile.php"><img src="../pics/profil-de-lutilisateur.png"></a>
            </div>
        </nav>
        <nav class="nav2" id="nav2" style="background-color: white;">
            <ul>
                <li><a href="#"></a>Welcome to your profile <?php echo $_SESSION['firstName'];?> </li>
               
                
            </ul>
        </nav>
    </header>    
    <body>    
    <form action="logout.php" method="post">
    <div class="container" style="border: 2px solid #000000; border-radius: 10px; height: 30em; width: 72em;">
            <br>
            <h1 class="text-center">Profile</h1>

            <div class="mb-3 row">
            <?php if(isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            </div>
        <div id="classe" class=" container d-flex justify-content-center" >
                <div style="width: 400px;" >
                    <div class="d-flex" style="gap: 20px;">   
                    <h5 for="firstname" >First Name :</h5>
                    <p><?php echo $_SESSION['firstName'];?></p>
                    </div> <br>

                    <div  class="d-flex" style="gap: 20px;">
                    <h5 >Last Name :</h5>
                    <p><?php echo $_SESSION['lastName'];?></p>
                    </div><br>

                    <div  class="d-flex" style="gap: 20px;">
                    <h5 >Adress: </h5>
                    <p><?php echo $_SESSION['adress'];?></p>
                    </div><br>
                </div>
                <div style="width: 400px;">
                    <div  class="d-flex " style="gap: 20px;">
                    <h5>Phone Number: </h5>
                    <p><?php echo $_SESSION['phone'];?></p>
                    </div><br>

                    <div  class="d-flex" style="gap: 20px;">
                    <h5>Email :</h5>
                    <p><?php echo $_SESSION['email'];?></p>
                    </div><br>

                    <div class="d-flex" style="gap: 20px;">
                    <h5>Password :</h5>
                    <input type="password" value="<?php echo $_SESSION['password'];?>"></input>
                    </div><br>
           
            </div>
        </div><br>
            
            <div class="text-center">
            <button type="submit" name="edit" style="background-color:#FFB3C6;" class="mt-5 btn-lg">Edit Profile</button>
            <button type="submit"  href="logout.php" name="logout" style="background-color:#FFB3C6;" class="mt-5 btn-lg">Log Out</button>
            </div>
    </div>
    </form>
 

 


<?php
include 'footer.php';
?>
<?php
    }
else{
header('location:main.php');
}
?>