<?php

include 'database/dbconn.php';

if (isset($_GET['token'])) {
	# code...
	$token=$_GET['token'];

	// update query
	$update="update email_verification set status='active' where token='$token'";

	$query=mysqli_query($conn,$update);

	if ($query) {
		# code...
		if (isset($_SESSION['message'])) {
			# code...
			$_SESSION['message']="account updated successfully";

			header('location:login.php');
		   }else{
				$_SESSION['message']="you are logged out";
				header('location:login.php');
		}else{
			$_SESSION['message']="account not updated successfully";
			header('location:index.php');
		}
	}


}

?>