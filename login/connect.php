
<?php

$con=new mysqli('localhost','root','','Database_e-commerce');  // methode two for connexion database m3a php 

if($con){
    
    //  echo 'connection is working';
	
    
}
else{
    die(mysqli_error($con));
}



?> 



