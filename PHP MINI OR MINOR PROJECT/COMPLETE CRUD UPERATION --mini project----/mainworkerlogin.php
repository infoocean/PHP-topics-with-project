
<?php

Include 'database_connection.php';

if (isset($_POST['submit'])) {
	# code...

	$username = $_POST['username'];
	$password = $_POST['password'];

	$check_query = "select * from worker where username = '$username' && password = '$password'"; 

	$result = mysqli_query($connection, $check_query);

	$numofrows = mysqli_num_rows($result);

	if ($numofrows == 1) {
		# code...
		$_SESSION['user'] = $username;
		header('location:All Employ data/mainworker.php');
		die();
	}else{
        
       echo "Invailed username or Password";

	} 
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
                        <a href="#home" class="btn btn-primary bg-white text-dark" style="width: 100px; font-weight: bold;">login</a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a  href="#home" class=" text-primary nav-link active" >Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             <h3 class="register-heading"> login as a worker</h3>
                              <form  method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        	<label for="username">worker username</label>
                                            <input type="text"  name="username" class="form-control" placeholder="Enter username *" value="" required="firstname"/>
                                        </div>
                                        <div class="form-group">
                                        	<label for="password">worker password</label>
                                            <input type="password"  name="password" class="form-control" placeholder="Enter Password *" value="" required="lastname" />
                                        </div>
                                        <div class="form-group">
                                        <input type="submit"  name="submit" class="btnRegister"  value="submit"/>
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