<?php

include('db/connect.php');

if (isset($_POST['submit'])) {
  # code...
  // for special character in save the databases
  if (isset($_POST['username'])) {
    # code...
    // if username is optional or null
      $username = mysqli_real_escape_string($conn, $_POST['username']);

  }else{
    $username = '';
  }
    // if number is optional or null
  if (isset($_POST['number'])) {
    # code...
      $number = mysqli_real_escape_string($conn, $_POST['number']);
  }else{
    $number = '';
  }

  $email = mysqli_real_escape_string($conn, $_POST['email']);

  // if position is optional or null
  if (isset($_POST['position'])) {
    # code...
    $position = mysqli_real_escape_string($conn, $_POST['position']);
  }else{
    $position = '';
  }

  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $conform_password = mysqli_real_escape_string($conn, $_POST['conform_password']);

  //secure password using hashing algo Blowfish
  $secure_password = password_hash($password, PASSWORD_BCRYPT);
  //secure conform  password using hashing algo Blowfish
  $secure_conform_password = password_hash($conform_password, PASSWORD_BCRYPT);

  //check email  using select query check email validation
  $check_email = "select * from employ where email = '$email'"; 

  // query fire
 $result = mysqli_query($conn, $check_email);
// search email tables rows
 $check_rows_count = mysqli_num_rows($result);

//condition
 if ($check_rows_count>0) {
   # code...
   ?>
   <p class="text-center text-danger" ><b>This Email Address Allready Exists</b></p>
   <?php

 }else{

      if ($password === $conform_password) {
      # code...
         // insert query
          $insert_query = "insert into employ (username, email, mobile, position, password, conform_password ) values ('$username', '$email', '$number', '$position', '$secure_password', '$secure_conform_password')";
        //query fire
           $result = mysqli_query($conn, $insert_query);
  
             header('location:login/login.php');
             die();
    }else{
          ?>
            <p class="text-center text-danger" ><b>password not matching</b></p>
        <?php  
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp Form </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--include fontawesome using linl folder-->
  <?php include('link/links.php'); ?>
  <!--includem css folder-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Create Account</h4>
    <a href="#home" class="btn btn-block btn-gmail"> <i class="fab fa-google"></i>   Login via - Gmail </a>
    <a href="#home" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via - facebook</a>
  </p>
  <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" >
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="username" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
      <input name="number" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
    </div>
    <select name="position" class="form-control">
      <option selected=""> Select job type</option>
      <option>Designer</option>
      <option>Manager</option>
      <option>Accaunting</option>
      <option>Developer</option>
      <option>Marketer</option>
      <option>Communicator</option>
      <option>Traine</option>
      <option>Team Leader</option>
    </select>
  </div> <!-- form-group end.// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input name="password" class="form-control" placeholder="Create password" type="password" required="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input name="conform_password" class="form-control" placeholder="conform password" type="password" required="conform_password">
    </div>
     <!-- form-group// -->                                      
    <div class="form-group">
        <button name="submit"  type="submit" class="btn btn-primary btn-block" value="submit"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login/login.php">Log In</a></p>                                                                 
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>