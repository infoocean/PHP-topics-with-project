<?php
//server details
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "roomdekho";
//connect
$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
	# code...
}else{
	echo "not connect to database";
};

?>