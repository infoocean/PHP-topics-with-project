<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<div>
    <center><h2>PASSWORD HASHING BLOWFISH ALGORITHIMS </h2></center>
</div>
<div>
 <center>
   <form action="" method="POST" enctype="">
    Enter Email:<br>
     <input type="email" name="email" placeholder="email" required="email"><br>
     Enter Password:<br>
     <input type="password" name="password" placeholder="password" required="password" >
     <br>
     <input type="submit" name="submit" value="login">
   </form>
 </center>
</div>
</body>
</html>

<?php
//INCLUDE database connection file
include 'database/dbconn.php';
if (isset($_POST['submit'])) {
  # code...
  //access username password
  $email=$_POST['email'];
  $password=$_POST['password'];

//password security hashing blowfish algorithms using built in php function
  ############################
  #  password is very secure #
  #  password convert bcrypt #
  ############################
  $secure_password=password_hash($password, PASSWORD_BCRYPT); #Bcrypt password
//insert data in database
  $insert_query="insert into user_security(username,password)values('$email','$secure_password')";
// query fire
  mysqli_query($conn,$insert_query);
}

?>
