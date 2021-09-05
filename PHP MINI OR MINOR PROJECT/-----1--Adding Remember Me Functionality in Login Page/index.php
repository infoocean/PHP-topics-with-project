<?php
//include db connection file
include 'database/dbconn.php';
ob_start(); 
//access data from user input
if (isset($_POST['submit'])) {
	# code...
	//find data
	$email=$_POST['email'];
	$password=$_POST['password'];
     # code... 
     //check email validation email is aready exists or not in database
     $search_email="select * from information where email='$email'";
     //query fire
     $result=mysqli_query($conn, $search_email);
     //count email in database row
     $countemail=mysqli_num_rows($result);
     ///check
     if ($countemail==1) {
    # code...
    //fetch password using email
    $fetchpassword=mysqli_fetch_assoc($result);
    //access password
    $find_password=$fetchpassword['password'];
    //verify this password
    $verify_password=password_verify($password, $find_password);

      if ($verify_password) {
           # code...
          if (isset($_POST['rememberme'])) {
            # code...
             $_SESSION['username']=$email;
            //set cookie for email
            setcookie('emailcookie',$email,time()+100);
            //set cookie for password
            setcookie('passwordcookie',$password,time()+100);
            header('location:homepage.php');
          }else{
              $_SESSION['username']=$email;
               header('location:homepage.php');
             };
         }else{
             echo "<center>password incorrect</center>";
           };
      }else{
     echo "<center>please enter valid email</center>"; 
    };
  };
?>

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
	<h4 class="card-title mt-3 text-center">Login Account</h4>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="">
	<!-- form-group// -->
	  <lable><b>Enter Email Address:</b></lable>
    <div class="form-group input-group">
    	<input type="email" name="email" class="form-control" placeholder="Email address" required="email" value="<?php
                                                                                           if(isset('$_COOKIE'['emailcookie'])){ echo $_COOKIE['emailcookie']; } ?>">
    </div>
     <!-- form-group// -->
    <lable><b>Enter  Password:</b></lable>
    <div class="form-group input-group">
    	<input type="password" name="password" class="form-control" placeholder="Create password" required="password" value="<?php
                                                                                           if(isset('$_COOKIE'['passwordcookie'])){ echo $_COOKIE['passwordcookie']; } ?>">
    </div> 
    <!-- form-group// -->
    <div class="form-group">
    	<input type="checkbox" name="rememberme"> Remember me
    </div>
    <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
    </div> <!-- form-group// -->                                 
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>



