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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>hackerkernal task</title>
  </head>
  <body>
    
    <div class="container-fluid bg-warning"> 
      <div class="container p-5">
        <form action="registration_form_validation.php" method="POST">
          <div class="form-group">
    <label for="exampleInputname">Enter Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="name" required="name">
  </div>
  <div class="form-group">
    <label for="exampleInputemail"> Enter Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" placeholder="@gmail.com" required="email">
  </div>
  <div class="form-group">
   <label for="exampleInputpassword"> Enter Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputpassword" placeholder="password" required="password">
  </div>
  <div class="form-group">
    <label for="exampleInputmobile">Enter Mobile Number</label>
    <input type="text"  name="mobile" class="form-control" id="exampleInputmobile" placeholder="mobile number" required="mobile number">
  </div>
  <button type="submit" name="submit" class="btn btn-primary" style="width: 100px;">Register</button>
</form><br>
  <a href="login_page.php"><button class="btn btn-danger" style="width: 100px;">Login</button>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>