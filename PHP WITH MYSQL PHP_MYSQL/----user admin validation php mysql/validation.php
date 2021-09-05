<?php 

session_start();

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname  = "user_admin";

// create connection

$connection = mysqli_connect($servername, $username ,$password, $dbname);

// check connection  

if ($connection) {
	# code...
	echo "connection successfull <br>";
}else{
	echo "connection unsuccessfull";
}

if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];

//check dublicate data or using select query
	$checkdatabase = "select * from employ where empid = '$username' && password ='$password' ";

	$query = mysqli_query($connection, $checkdatabase);

	$numofrows = mysqli_num_rows($query);

	if ($numofrows == 1) {
		# code...
	   $_SESSION['username'] = $username;

	   // if data is match from database so login successfull and header moves homepage
	   header('location:homepage.php');
	   
	}else{
		
       // if data is not match so header move redirect loginsigninpage
		header('location:login_signin.php');
	}

}

?>