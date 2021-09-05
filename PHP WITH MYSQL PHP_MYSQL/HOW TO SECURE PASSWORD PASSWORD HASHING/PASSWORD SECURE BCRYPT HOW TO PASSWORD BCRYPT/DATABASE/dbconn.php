<?php 
//server details
//server name
$servername="127.0.0.1:3307";
//username
$username="root";
//password
$password="";
//database name
$databasename="student_information";

//create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
//check connection success or no
if ($conn) {
	# code..
}else{
	echo "connection unsuccessfull";
}

?>