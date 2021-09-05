<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="POST" enctype="multipart/form-data">
		uoload resume
		<input type="file" name="resume" placeholder="">
		<br>
		<button type="submit" name="submit">upload</button>
	</form>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	# code...
	// file informatuion like name, size, tmp_name etc
	echo "<pre>";
	print_r($_FILES);
	
}

?>