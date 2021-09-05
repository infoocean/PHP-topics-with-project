<?php

include('../db/connect.php');

if (isset($_POST['submit'])) {
  # code...
     $email = $_POST['email'];
     $password = $_POST['password'];

     //search email address in a database
     $search_email = "select * from employ where email = '$email'";

     $query = mysqli_query($conn, $search_email);  
      //result true or false
     $res = mysqli_num_rows($query);

     if ($res) {
       # code...
      $email_pass = mysqli_fetch_assoc($query);

      $db_pass = $email_pass['password'];
      // session variable  redirect in main page show for username
      $_SESSION['user'] = $email_pass['username'];

     //password verify result true or false
      $password_decode = password_verify($password, $db_pass);
      
     if ($password_decode) {
        # code...
        echo "login successfull";
        header('location:../myportfolio/mainpage.php');
      }else{
        ?>
        <p class="text-center" style="font-size: 15px; color: red;"><b> Password incorrect</b> </p>
        <?php
        }
      }
      else{
        ?>
          <p class="text-center" style="font-size: 15px; color: red;"><b>please enter valid email address</b> </p>
        <?php
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--include fontawesome using linl folder-->
  <?php include('../link/links.php'); ?>
  <!--includem css folder-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Login  Account</h4>
    <a href="#home" class="btn btn-block btn-gmail"> <i class="fab fa-google"></i>   Login via - Gmail </a>
    <a href="#home" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via - facebook</a>
  </p>
  <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>

  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
       <!-- form-group// --> 
     <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
     <div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required="email">
      </div>
    </div>
     <!-- form-group// --> 
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
    <div>
        <input name="password" class="form-control" placeholder="Create password" type="password" required="password">
    </div>
  </div>
     <!-- form-group// -->                                      
    <div class="form-group">
        <button name="submit"  type="submit" class="btn btn-primary btn-block" value="submit"> Login</button>
    </div> 
    <!-- form-group// -->      
    <p class="text-center"> Don't Have an account? <a href="../indexx.php">Sign Up here </a> </p>                                                                 
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