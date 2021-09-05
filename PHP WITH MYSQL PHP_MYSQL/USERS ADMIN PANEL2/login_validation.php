<?php

session_start();

//server details
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$databasename = "User_admin_panel2";

// create server connection
$connection = mysqli_connect($servername, $username, $password ,$databasename);


// find user input value

 $username = $_POST['username'];
 $password = $_POST['password'];

 // eheck user input data

  $checkdata = "select * from user_information where username = '$username' && password = '$password'";
  //select  table
  $result  = mysqli_query($connection, $checkdata);
  //check data in a all rows and colums
  $numofrows = mysqli_num_rows($result);
  
  if ($numofrows==1) {
    # code...
    $_SESSION['username'] = $username;
    header('location:homepage.php');
  }else{
    echo"this user id or password not match";
    
    header('location:registration_form.php');
  }
  
  ?>
 

