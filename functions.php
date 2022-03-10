<?php
    include 'connect/myconnect.php';
    // $customerID = $_GET['customerID'];


    function is_have_order($user){
        $sql = "SELECT * FROM orders WHERE customerCode='$user';";
        $result = mysqli_query($connect, $sql);
        $resultCheck = mysqli_fetch_rows($result);

        global $have;
        global $confirmed;

        if($resultCheck == 0){
            $have = false ;
            $confirmed = false ;
        }
        else{
            
        }
    }
    // header("Location: profile.php?$customerID");