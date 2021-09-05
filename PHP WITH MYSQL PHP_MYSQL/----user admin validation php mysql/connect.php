<?php 

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname  = "user_admin";

// create connection

$connection = mysqli_connect($servername, $username ,$password, $dbname);

// check connection  

if ($connection) {
	# code...
	echo "connection successfull<br>";
}else{
	echo "connection unsuccessfull";
}

?>