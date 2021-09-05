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
	$_SESSION['username']=$email;
	header('location:homepage.php');
	die();
}else{
	header('location:index.php');
	die();
  };
 
};

?>