
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
  <h4 class="card-title mt-3 text-center">Create Account</h4>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="">
  <!-- form-group// -->
  <lable><b>Enter Full Name:</b></lable>
  <div class="form-group input-group">
        <input type="text"  name="name" class="form-control" placeholder="Full name" required="name">
    </div>
     <!-- form-group// -->
    <lable><b>Enter Email Address:</b></lable>
    <div class="form-group input-group">
      <input type="email" name="email" class="form-control" placeholder="Email address" required="email">
    </div>
     <!-- form-group// -->
    <lable><b>Enter Mobile Number:</b></lable>
    <div class="form-group input-group">
        <input type="text" name="number" class="form-control" placeholder="Phone number" required="number">
    </div>
     <!-- form-group// -->
    <lable><b>Create Password:</b></lable>
    <div class="form-group input-group">
      <input type="password" name="password" class="form-control" placeholder="Create password" required="password">
    </div> 
    <!-- form-group// -->
     <lable><b>Conform Password:</b></lable>
    <div class="form-group input-group">
      <input type="password" name="conform_password" class="form-control" placeholder="conform password" required="conform_password" >
    </div>
    <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
    </div> <!-- form-group// -->  
    <div>    
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
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
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$password=$_POST['password'];
	$conform_password=$_POST['conform_password'];
	//secure password password bcrypt Bcrypt means blowfish algo.
	$secure_password=password_hash($password, PASSWORD_BCRYPT);
	//SECURE conform password
	$secure_conform_password=password_hash($conform_password, PASSWORD_BCRYPT);
  //genetate random string for unique token
  $token=bin2hex(random_bytes(10));
  //status 
  $status='inactive';
	//check email validation email is aready exists or not in database
	$email_validation="select * from email_verification where email='$email'";
	//query fire
	$result=mysqli_query($conn,$email_validation);
    //fetch data with count row according email
    $countrow=mysqli_num_rows($result);
    //check
	if ($countrow>0) {
		# code...
		echo "<center><small>this email is already exists</small></center>";
	}else{      
        if ($password===$conform_password) {
            # code...
		        //insrt data
		         $insert_query="insert into email_verification(name,email,number,password,conform_password,token,status)values('$name','$email','$number',
             '$secure_password','$secure_conform_password','$token','$status')";
		         //query fire
		           $check=mysqli_query($conn,$insert_query);
             //check data inserted or not
                 if ($check) {
                  header('location:login.php');
                }else{
                  header('location:index.php');
                };
           }else{
              echo "<center>password and conform_password are not same</center>";
            };
        };
  };

?>



