<?php

require('database/connection.php');

if (isset($_POST['submit'])) {
  # code...
     $email = $_POST['email'];
     $number = $_POST['number'];
     //search email address or mobile number in a database
     $search_email = "select * from usertable where email = '$email' && number = $number";
     $query = mysqli_query($conn, $search_email);  
      //result true or false
     $res = mysqli_num_rows($query);
     if ($res){
      #code
         $fetchdata = mysqli_fetch_array($query);

         $_SESSION['user'] = $fetchdata['name'];
         $_SESSION['email']=$fetchdata['email'];

         echo "login successfull";
         header('location:mainpage.php');
      }else{
       ?>
       <center><p style="color: red; font-weight: bold;">Please enter valid email or number</p></center>
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Login  Account</h4>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
       <!-- form-group// --> 
     <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
     <div>
        <input name="email" class="form-control" placeholder="Email Address" type="email" required="email">
      </div>
    </div>
     <!-- form-group// --> 
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
    <div>
        <input name="number" class="form-control" placeholder="Mobile Number" type="textbox" required="Number" minlength="10" maxlength="10">
    </div>
  </div>
     <!-- form-group// -->                                      
    <div class="form-group">
        <button name="submit"  type="submit" class="btn btn-primary btn-block" value="submit"> Login</button>
        <p>New user Register here <a href="index.php"> <b><u>SignUp</u><b></a></p>
    </div>                                                                  
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