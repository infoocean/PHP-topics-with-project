<?php 
session_start();
header('location:login.php');


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
  	echo "this userid or password allready use another persons so please try another userid password";
  }else
  {
  	// inserted query

  	$insert_query = "insert into useridpassword (username , password) values ('$username' ,'$password')";

    $result = mysqli_query($connection, $insert_query);

     //check result data
    if ($result) {
    	# code...
    	echo "data inserted properly";
    }else{
    	echo "data not inserted ";
    }
  }
}

?>