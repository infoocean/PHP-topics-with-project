<?php
//server details
$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="student_information";
//connect database
$conn =mysqli_connect( $servername, $username, $password, $databasename);

if (isset($_GET['id'])) {
	# code...
	//access id
	$ids=$_GET['id'];
    //select data from using id
    $selectdata ="select * from userdata where id={$ids}";
    //query fire
    $query=mysqli_query($conn,$selectdata);
    #fetch data
     $fetchdata=mysqli_fetch_assoc($query);
    //access all data from database
     $name=$fetchdata['name'];
     $email=$fetchdata['email'];
     $password=$fetchdata['password'];
};

if (isset($_POST['submit'])) {
	# code...
	$newname=$_POST['name'];
	$newemail=$_POST['email'];
	$newpassword=$_POST['password'];
	//update data
    $update_query="update userdata set name='$newname', email='$newemail', password='$newpassword' where id={$ids}";

    $res=mysqli_query($conn, $update_query);

    if ($res) {
    	# code...
    	header('location:select.php');
    };
};
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<center>
		<form   method="POST" enctype="">
			Enter Your Name:<br>
			<input type="text" name="name" placeholder="name" required="name" value="<?php echo $name=$fetchdata['name'];?>"><br>
            Enter Your Email:<br>
			<input type="email" name="email" placeholder="email" required="email" value="<?php echo $email; ?>"><br>
			Enter Your password:<br>
			<input type="password" name="password" placeholder="password" required="password" value="<?php echo $fetchdata['password'];?>"><br>
			<input type="submit" name="submit" value="update">
		</form>
	</center>
</div>
</body>
</html>
