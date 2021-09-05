<?php 
include 'connect.php';

if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];

	// inserting query
	$insert_data = "insert into employ (empid, password) values ('$username' , '$password')";

	//query
	$result = mysqli_query($connection, $insert_data);

	// check data inserted or not
	if ($result) {
		# code...
		echo "data inserted properly";
	}else{
		echo "data not inserted ";
	}
}


 ?>