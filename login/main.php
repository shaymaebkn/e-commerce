<?php
session_start();
include 'connect.php';



    if(isset($_POST['email']) && isset($_POST['password'])){

    // $customerCode = $_GET['customerCode'];
 
      function validate($data){

        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
      }
      
      $email = validate($_POST['email']);
      $password = validate($_POST['password']);

      if(empty($email)){
      header("location:login.php?error=Email is required");
     exit();
      }
      else if(empty($password)){
        header("location:login.php?error=Password is required");
        exit();
      }
      else{
        $sql="SELECT * FROM `customers` WHERE email='$email' AND password='$password'";
        $result=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result) === 1){

         $row=mysqli_fetch_assoc($result);

         if($row['email']===$email && $row['password']===$password){

         $_SESSION['email']=$row['email'];
         $_SESSION['password']=$row['password'];
         $_SESSION['customerCode']=$row['customerCode'];
         $_SESSION['firstName']=$row['firstName'];
         

         header('location:profile.php?custumorID=');
        }else{
          header("location:login.php?error=incorrect in email orr password");
          
        }
        

      }
      else{
          header("location:login.php?error=ERROR in email or password");
        }
      }


    }
     else{
       header("location: login.php");
        }
       
      
    ?>
