<?php
// connect server with database
// here 127.0.0.1:3307 is a server name , root is a user name, students is a database name and gap is a password but password is not here 
$conn=mysqli_connect('127.0.0.1:3307','root','','students');
if ($conn) {
	# code...
	echo "yes";
}else{
	echo "no";
}
?>