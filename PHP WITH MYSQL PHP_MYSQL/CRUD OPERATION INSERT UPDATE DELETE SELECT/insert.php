<?php
#add database connectivity file
include 'database/dbconn.php';
//access data from input user
if (isset($_POST['submit'])) {
	# code...
	//access user input data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
//insert query
	$insert="insert into userdata(name,email,password)values('$name','$email','$password')";
//query fire
	$query=mysqli_query($conn,$insert);
// if query is success header movess
	if ($query) {
		# code...
		header('location:select.php');
	}else{
		header('location:index.php');
	}
}

?>