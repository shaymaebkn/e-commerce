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
        include 'header.php';
        
        ?>
    </header>    
    <body>    
    <form action="main.php"   method="post">
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