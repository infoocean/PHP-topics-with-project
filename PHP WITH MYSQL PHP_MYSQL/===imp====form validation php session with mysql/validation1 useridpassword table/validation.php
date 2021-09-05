<?php 
session_start();

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database_name = "loginformphpsesion";

//connection
$connection = mysqli_connect($servername,$username,$password,$database_name);

//check connection is true or false
if ($connection) {
	# code...
	echo "success connection <br>";
}else{
	echo "unsucces connection";
}

// assign input value and perform operation insert or select or check

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

// check user data is dublicate or not

	$check_data = "select * from useridpassword where username ='$username' && password = '$password' ";

	$query_fire = mysqli_query($connection, $check_data);

	$numofrows=mysqli_num_rows($query_fire);

  if ($numofrows == 1) {
  	# code...
  	$_SESSION['NAME']=$username;
    header('location:homepage.php');
  }else
  {
  	header('location:login.php');
    }
  }


?>