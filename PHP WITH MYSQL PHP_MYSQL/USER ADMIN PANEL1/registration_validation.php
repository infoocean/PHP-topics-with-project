<?php

session_start();
//server details
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$databasename = "User_admin_panel";

// create connection
$connection = mysqli_connect($servername, $username, $password, $databasename);

if (isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['password'];

//check query
$check = "select * from user_information where  email = '$email' && password = '$password'";

$res = mysqli_query($connection,$check);

$numofrows =mysqli_num_rows($res);

if ($numofrows>0) {
	# code....
	echo "<center>this email  or password already registered</center>";

 }else{
   // insert query
   $insert_query ="insert into user_information (email , password) values ('$email', '$password')";
   $checkcondition=mysqli_query($connection , $insert_query);
   if ($checkcondition) {
   	# code...
   	header('location:login_form.php');
   }else{
   	header('location:registration_form.php');
   };
 };
};

?>