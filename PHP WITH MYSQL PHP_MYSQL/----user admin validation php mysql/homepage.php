<?php 

session_start();
if (!isset($_SESSION['username'])) {
	# code...
	header('location:login_signin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2> hii...... <?php  echo $_SESSION['username']; ?></h2>
<a href="logout.php">logout</a>
</body>
</html>