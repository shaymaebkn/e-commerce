
<?php

$user = "root";
$password = "";
$name_bd = "Database_e-commerce";

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





?> 



