<?php

session_start();


//server details
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$databasename = "hackerkernal";

// create server connection
$connection = mysqli_connect($servername, $username, $password ,$databasename);


// find user input value

 $email = $_POST['email'];
 $password = $_POST['password'];

 // eheck user input data

  $checkdata = "select * from usertable where email = '$email' && password = '$password'";
  //select  table
  $result  = mysqli_query($connection, $checkdata);
  //check data in a all rows and colums
  $numofrows = mysqli_num_rows($result);
  
  if ($numofrows ==1) {
    # code...
    $_SESSION['email'] = $email;
    header('location:homepage.php');
    
  }else{
    echo"this user id or password not match";
    
    header('location:index.php');
  }
  
  ?>
 

