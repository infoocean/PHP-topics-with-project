<?php

session_start();
header('location:index.php');

//server details
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$databasename = "User_admin_panel2";

// create server connection
$connection = mysqli_connect($servername, $username, $password, $databasename);

$username = $_POST['username'];
$password = $_POST['password'];

$checkdata =  "select * from user_information where username = '$username' && password = '$password'";

$result = mysqli_query($connection, $checkdata);

$numofrows  = mysqli_num_rows($result);

if ($numofrows ==1 ) {
  # code...
  $echo= "this userid or passwoed already exists";
  header('location:registration_form.php');
}else{
  $insertquery = "insert into user_information (username, password) values ('$username', '$password')";
  $inserted = mysqli_query($connection, $insertquery);
}

?>
