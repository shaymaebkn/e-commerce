<?php

$user = "root";
$password = "";
$name_bd = "e-commerce";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$name_bd,
		$user,
		$password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "there is a problem: ".$e->getMessage();
}

// $con=new mysqli('localhost','root','','e-commerce');  // methode taniya dyal connect lowla mbghatch tkhdm liya  

// if($con){
    
//      echo 'connection is working';
    
// }
// else{
//     die(mysqli_error($con));
// }



?> 


