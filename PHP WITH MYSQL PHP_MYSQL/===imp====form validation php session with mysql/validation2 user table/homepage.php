<?php 
session_start();
if (!isset($_SESSION['USERNAME'])) {
	# code...
	header('location:loginpage.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>enjoy: <?php echo $_SESSION['USERNAME']; ?></h1>
<a href="logout.php">logout</a>
</body>
</html>