<?php
// server details
$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="crudoperation1";

//connect server
$conn=mysqli_connect( $servername , $username, $password);

// select to database
$db=mysqli_select_db($conn, $databasename);
//check connection
?>

 


