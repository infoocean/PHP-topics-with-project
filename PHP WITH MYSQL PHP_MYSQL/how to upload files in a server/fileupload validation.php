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
	//echo "<pre>";
	//print_r($_FILES);
	$size = $_FILES['resume']['size']/1024;
	if ($size<=200) {
		# code...
	move_uploaded_file($_FILES['resume']['tmp_name'],$_FILES['resume']['name']);
	}else{
		echo "file size out of 200kb";
	}
}

?>