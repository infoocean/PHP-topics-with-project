<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Update password</h4>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="">
     <!-- form-group// -->
    <lable><b>New Password:</b></lable>
    <div class="form-group input-group">
      <input type="password" name="password" class="form-control" placeholder="Create password" required="password">
    </div> 
    <!-- form-group// -->
     <lable><b>Conform Password:</b></lable>
    <div class="form-group input-group">
      <input type="password" name="conform_password" class="form-control" placeholder="conform password" required="conform_password">
    </div> 
         <!-- form-group// -->
    <div class="form-group input-group ">
      <button type="submit" name="submit" class="btn btn-primary form-control" >update</button>
    </div> 
                                                                   
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>


<?php
//include db connection file
include 'database/dbconn.php';
//access data from user input
if (isset($_POST['submit'])) {
	# code...
	//find data
     //access token 
    if (isset($_GET['token'])) {
    # code...
      $token=$_GET['token'];
       };
	$password=$_POST['password'];
	$conform_password=$_POST['conform_password'];
  //check password or conform password is same or not
  if ($password==$conform_password) {
    # code...
	   //secure password password bcrypt Bcrypt means blowfish algo.
	   $password=password_hash($password, PASSWORD_BCRYPT);
      //update password
      $update="update email_verification set password='$password' where token='$token'";
      //query fire
      $query=mysqli_query($conn, $update);
       if ($query) {
         # code..
          $_SESSION['msg']="your password has been updated";
          header('location:login.php');
       };
   }else{
    echo "<center>password and conform password are not same</center>";
   };
 };

?>