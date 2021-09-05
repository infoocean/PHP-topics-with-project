<?php

session_start();

header('location:login_page.php');

//server details
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$databasename = "hackerkernal";

// create server connection
$connection = mysqli_connect($servername, $username, $password, $databasename);

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$checkdata = "select * from usertable where email = '$email'";

$result = mysqli_query($connection, $checkdata);

$numofrows  = mysqli_num_rows($result);

if ($numofrows == 1) {

  echo "this rmail already exists";
  header('location:index.php');
}
else{

  $insertquery = "insert into usertable (name, email, mobile) values ('$name', '$email', '$mobile')";

  $inserted = mysqli_query($connection, $insertquery);
}

?>
