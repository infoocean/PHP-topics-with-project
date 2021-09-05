<?php
//include database file
require 'database/connection.php';

if (isset($_POST['submit'])) {
  # code...
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
    //check email  using select query check email validation
   #####################################
   ## email, mobile number validation ##
   #####################################
    $check_validation= "select * from usertable where email = '$email' OR number = $number"; 
    // query fire
    $email_result = mysqli_query($conn, $check_validation);
    // search email tables rows
    $num_of_rows = mysqli_num_rows($email_result);
    //condition
     if ($num_of_rows>0) {
       # code...
      ?>
        <center><p style="color: red; font-weight: bold;">this emailId or number allready exists</p></center>

      <?php  
      }else{
         // insert query
          $insert_query = "insert into usertable (name, email, number) values ('$name', '$email', $number)";
        //query fire
          $result = mysqli_query($conn, $insert_query);
          header('location:loginpage.php');
          die();
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
    <!------ Include the above in your HEAD tag  font awesome---------->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Create Account for  Task</h4>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" >
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="name" class="form-control" placeholder="Full Name" type="textbox" required="name">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control" placeholder="Email Address" type="email" required="email" onclick="validateemail()" >
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
      <input name="number" class="form-control" placeholder="Mobile Number" minlength="10"  maxlength="10" type="textbox" required="number" >
    </div> <!-- form-group// -->                                     
    <div class="form-group">
        <button name="submit"  type="submit" class="btn btn-primary btn-block" value="submit"> Register </button>
        <p>if you are registered login here <a href="loginpage.php"><b><u>Login</u></b></a></p>
    </div> <!-- form-group// -->                                                                       
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="">

</script>
</body>
</html>