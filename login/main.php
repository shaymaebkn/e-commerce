<?php

include 'connect/connect.php';

    if(isset($_POST['email']) && isset($_POST['password'])){

    
 
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
        
      }
      else{
        $sql="SELECT * FROM `customers` WHERE email='$email' AND password='$password'";
        $result=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result) === 1){

         $row=mysqli_fetch_assoc($result);

         if($row['email']===$email && $row['password']===$password){
          echo'loggin';
        }else{
          // header("location:login.php?error=ERROR in email orrr password");
          
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
