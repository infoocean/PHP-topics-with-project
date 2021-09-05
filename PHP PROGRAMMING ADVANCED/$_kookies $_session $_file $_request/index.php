<?php
//start the session
session_start();

if (isset($_POST['submit'])) {
	# code...
//access post data in array form
	echo "<pre>";
	print_r($_POST);
	echo "<pre>";

//access individually post data

$name = $_POST['name'];
echo "$name <br>";	
$state=$_POST['state'];
echo "$state <br>";

//accesss post data using $_request 
$email=$_REQUEST['email'];
echo "$email<br>";

$city=$_REQUEST['city'];

echo "city<br>";

//access file data
//access image propertiess
if (isset($_FILES['imagefile'])) {
 	# code...
 	echo "<pre>";
	print_r($_FILES);
	echo "<pre>";

	$image=$_FILES['imagefile'];

	echo "<pre>";
	print_r($image);
	echo "<pre>";

	//access indivudally image properties
	$image_size=$image['size']; 
    $image_name=$image['name']; 
    $image_names=$_FILES['imagefile']['name']; 
    $image_tmpname=$_FILES['imagefile']['tmp_name']; 

    echo "<br> $image_size,<br> $image_name,<br> $image_names,<br> $image_tmpname";

     //image destination
     $dest = 'image folder/'.$image_name;
    //uploaded
      move_uploaded_file($image_tmpname, $dest);

   //create cookies
   setcookie('cookiename','shubham',time()+86400);
   //create session

   $_SESSION['username']="HELLO SHUBHAM $email";

   $cookiename=$_COOKIE['cookiename'];


echo "$cookiename<br>";

$sessionname=$_SESSION['username'];

echo "$sessionname";

   echo "<pre>";
   print_r($_SERVER);
echo "<pre>";






 };


};





?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="name" placeholder="name"><br>
<input type="text" name="email" placeholder="email"><br>
<input type="text" name="city" placeholder="city"><br>
<input type="text" name="state" placeholder="state"><br>
<input type="file" name="imagefile"><br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>