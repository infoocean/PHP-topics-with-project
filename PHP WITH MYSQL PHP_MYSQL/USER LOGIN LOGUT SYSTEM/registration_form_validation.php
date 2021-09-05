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
$password =$_POST['password'];
$mobile = $_POST['mobile'];


$checkdata = "select * from usertable where email = '$email' && password = '$password'";

$result = mysqli_query($connection, $checkdata);

$numofrows  = mysqli_num_rows($result);


if ($numofrows==1) {
      echo "this userid or password already exicxts";
      header('location:index.php');
}
else{

  $insertquery = "insert into usertable (name, email,  mobile, password) values ('$name','$email','$mobile', '$password')";

  mysqli_query($connection, $insertquery);
}


?>
