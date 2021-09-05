<?php
$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="student_information";
//connect database
$conn = mysqli_connect( $servername, $username, $password, $databasename);

if (isset($_GET['id'])) {
	# code...
	$ids=$_GET['id'];
//delete data from  using id
	$delete_query="delete from userdata where id=$ids";
	$res =mysqli_query($conn, $delete_query);
	if ($res) {
		# code...
		header('location:select.php');
		die();
	}
}
?>