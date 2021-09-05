<?php 
session_start();

$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="information";

//connect database
$conn = mysqli_connect( $servername , $username, $password , $databasename);


?>