<?php
session_start();
if (!isset($_SESSION['username'])) {
	# code...
	header('location:index.php');
};
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
<h2>hello wellcome:<?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">logout</a>
</center>
</body>
</html>