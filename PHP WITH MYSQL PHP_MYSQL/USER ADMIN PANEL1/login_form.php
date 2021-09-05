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

    <title>user login form</title>
  </head>
  <body>
    
 <div class="container bg-warning">
 <div class="container">
  <h1 class="text-danger text-center"><b>User Login Form</b></h1>
  <form action="login_validation.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email" name="email" class="form-control"  required="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" name="password" class="form-control"  required="password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary" style="width: 150px;">login</button><br><br>
  <p>If you are new user before register here </p>
  <a class="btn-primary btn m-3" href="registration_form.php" style="width: 150px;">register</a>
 </form>
 </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>