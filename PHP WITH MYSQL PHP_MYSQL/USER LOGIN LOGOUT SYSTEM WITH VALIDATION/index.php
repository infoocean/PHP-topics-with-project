<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
   
   <div class="container-fluid bg-dark">
   	<div class="container bg-light">
   		<div class="heading">
   			<center><h3><u>New User Registration Form</u></h3></center>
   		</div>
   		<div>
   			<center>
   				<form action="signup_validation.php" method="POST">
   					Enter Name:<br>
   					<input type="text" name="name" placeholder="Full Name" required><br>
   					Enter Email:<br>
   					<input type="email" name="email" placeholder="email" required><br>
   					Create Password:<br>
   					<input type="password" name="password" placeholder="password" required><br>
   					Enter Number:<br>
   				    <input type="text" name="number" placeholder="Number" required><br><br>
   				    <input type="submit" name="submit" value="SignUp" class="btn btn-primary">
   				</form>
   			</center>
   		</div>
   		  <div>
   			<center>
   				<h3><u> If You are alleady Registered Please Login Here</u></h3>
   			</center>
   		</div>
   		<div>
   			<form action="login_validation.php" method="POST">
   				<center>
   				Enter Email:<br>
   				<input type="email" name="email" placeholder="email" required><br>
   				Enter Password:<br>
   				<input type="password" name="password" placeholder="password" required><br><br>
   				<input type="submit" name="submit" value="Login" class="btn btn-primary">
   			</center>
   			</form>
   		</div>
   	</div>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>