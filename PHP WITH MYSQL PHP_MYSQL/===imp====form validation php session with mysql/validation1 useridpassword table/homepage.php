<?php 

session_start();

if (!isset($_SESSION['NAME'])) {
	# code...
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>welcome:<?php echo $_SESSION['NAME']; ?> </h2>
<a href="logout.php">logout</a>
</body>
</html>