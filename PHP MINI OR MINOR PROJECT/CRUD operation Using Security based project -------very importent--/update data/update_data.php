<?php 

include('../db/connect.php');

if (isset($_GET['user'])) {
  # code...
  $user = $_GET['user'];
  // here this username find database table username
  $select_data = "select * from employ where username='$user'";

  $result = mysqli_query( $conn, $select_data);

  $numofrows=mysqli_fetch_assoc($result);
  
  $username = $numofrows['username'];
  $email = $numofrows['email'];
  $mobile = $numofrows['mobile'];
  $position = $numofrows['position'];
}

 if (isset($_POST['submit'])) {
  # code...
  $newusername = $_POST['username'];
  $newemail =  $_POST['email'];
  $newposition = $_POST['position'];
  $newnumber =$_POST['number'];
   
   // update query
       $updatedata = "update employ set username ='$newusername', email ='$newemail', position = '$newposition', mobile ='$newnumber' where username = '$user'";

        mysqli_query($conn, $updatedata);

       header('location:../myportfolio/mainpage.php');
       die();
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update  Form </title>
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
  <h4 class="card-title mt-3 text-center">Update Profile</h4>
  <form  method="POST">
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="username" class="form-control" placeholder="Full name" type="textbox" value="<?php echo $username;?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required="email" value="<?php echo $email;?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
    </div>
    <select name="position" class="form-control">
      <option><?php echo $position;?></option>
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
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
      <input name="number" class="form-control" placeholder="Phone number" type="textbox" value="<?php echo $mobile ?>">
    </div> <!-- form-group// -->
        <button name="submit"  type="submit" class="btn btn-primary btn-block" value="submit"> Update </button>
    </div> <!-- form-group// -->      
                                                                    
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

