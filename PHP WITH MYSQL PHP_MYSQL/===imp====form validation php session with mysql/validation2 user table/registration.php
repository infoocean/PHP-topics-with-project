<?php 
session_start();
header('location:loginpage.php');

//connection
$connection = mysqli_connect('127.0.0.1:3307', 'root' , ''); //server connection

//check connection is true or false
if ($connection) {
	# code...
	echo "success server connection <br>";
}else{
	echo "unsucces server connection";
}
 $db = mysqli_select_db($connection, 'loginformphpsesion');  // database connection

 //check
 if ($db) {
   # code...
  echo " success db connect <br>";
 }
 else{
  echo "db not connect";
 }

// assign input value and perform operation insert or select or check
 $userid = $_POST['userid'];
 $password = $_POST['password'];

  // check data from database
  $check_data = "select * from user where userid ='$userid' && password = '$password' ";

  $query_fire = mysqli_query($connection, $check_data);

  $numofrows=mysqli_num_rows($query_fire);

  if ($numofrows == 1) {
    # code...
    echo "this userid or password allready use another persons so please try another userid password";
  }else
  {
    // inserted query

    $insert_query = "insert into user (userid , password) values ('$userid' ,'$password')";

    $result = mysqli_query($connection, $insert_query);

     //check result data
    if ($result) {
      # code...
      echo "data inserted properly";
    }else{
      echo "data not inserted ";
    }
}

?>