<?php 

session_start();
header('location:login_signin.php');

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
		echo "this userid or password is already use another persons";
	}else{
		//inserting query
		$insert_data = "insert into employ (empid, password) values ('$username' , '$password')";

		$result = mysqli_query($connection, $insert_data);

	// check data inserted or not
	  if ($result) {
		# code...
		echo "data inserted properly";
	}else{
		echo "data not inserted ";
	}

	}

}

?>