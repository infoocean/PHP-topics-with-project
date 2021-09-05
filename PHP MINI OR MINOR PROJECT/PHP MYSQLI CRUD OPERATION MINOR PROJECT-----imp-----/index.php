<?php

Include('database_connection.php');

if (isset($_POST['submit'])) {
	# code...

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];

	$insert_query = "insert into employ (firstname, lastname, email, password, mobile_nu, sex, city) values ('$firstname', '$lastname', '$email', '$password', '$mobile', '$gender', '$city')";

	$result = mysqli_query($connection, $insert_query);

    header('location:login.php');
    die();
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>shubham jaiswal</title>
  </head>
  <body>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>welcome to the my website & Enjoy</p>
                        <a href="login.php" class="btn btn-primary bg-white text-dark" style="width: 100px; font-weight: bold;">login</a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link active bg-primary text-white" href="login.php">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             <h3 class="register-heading">Register as a Employee</h3>
                              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text"  name="firstname" class="form-control" placeholder="First Name *" value="" required="firstname"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  name="lastname" class="form-control" placeholder="Last Name *" value="" required="lastname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email"  name="email" class="form-control" placeholder="Email *" value="" required="email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control"  placeholder=" Password *" value="" required="password" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text"  name="mobile" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                          <div class="form-group">
                                          <select  name="gender">
                                            <option>Select Gender</option>
                                            <option>male</option>
                                            <option>female</option>
                                          </select>
                                        </div>
                                        <div>
                                           <select  name="city">
                                            <option>Select city</option>
                                            <option>Bhopal</option>
                                            <option>satna</option>
                                            <option>rewa</option>
                                            <option>jabalpur</option>
                                            <option>gwalier</option>
                                            <option>bhind</option>
                                            <option>katni</option>
                                            <option>shidi</option>
                                            <option>muraina</option>
                                            <option>ujjain</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                        <input type="submit"  name="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                              </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>