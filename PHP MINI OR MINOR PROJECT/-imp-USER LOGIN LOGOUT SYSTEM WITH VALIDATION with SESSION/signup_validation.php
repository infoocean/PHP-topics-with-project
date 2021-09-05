<?php
session_start();
//include db file
include 'database/dbconn.php';
//access data from user input
if (isset($_POST['submit'])) {
	# code...
	//access all data
	$email=$_POST['email'];
	$password=$_POST['password'];
// email or password validations
#check email or password is allready exists in a database or no
#using select query
$select_query="select * from worker where email='$email' && password='$password'";
//query fire
$result=mysqli_query($conn,$select_query);	
//count data row
$numofrows=mysqli_num_rows($result);
//check data exists or no
if ($numofrows>0) {
	# code...
	echo "This emailid or password allready exists";
}else{
	//if data not exists insert here
	//insert query
	$insertquery="insert into worker(email,password)values('$email','$password')";
	//query fire
	$res=mysqli_query($conn,$insertquery);
	//check data insert or no
	if ($res) {
		# code...
		header('location:index.php');
		die();
	}else{
		header('location:index.php');
	};
};

};
?>