<?php 
session_start();
//server detailsss
$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="hackertask";

//connect database
$conn = mysqli_connect( $servername , $username, $password , $databasename);

if ($conn) {
	# code...
}else{
	echo "database connection failed";
}


?>