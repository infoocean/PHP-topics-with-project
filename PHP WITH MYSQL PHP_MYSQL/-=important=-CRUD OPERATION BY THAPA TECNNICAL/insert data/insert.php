<?php
//include db connection file
Include 'connect.php';
// access data from user input
if (isset($_POST['submit'])) {
	# code...
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	if (isset($_POST['sex'])) {
		# code...
		$sex = $_POST['sex'];
	}else{
		$sex='';
	}
	
	if (isset($_POST['education'])) {
		# code...
		$education=$_POST['education'];
	}else{
		$education='';
	}
	if (isset($_POST['course'])) {
		# code...
		$course=$_POST['course'];
	}else{
		$course='';
	}
	
// insert query
$insert_query="insert into user_information (name, email, password, mobile, address, sex, education, course)values('$name','$email','$password', '$mobile', '$address', '$sex', '$education', '$course')";
// insert data
$res = mysqli_query($conn, $insert_query);
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

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>employ registration form</title>
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
                        <p>Please apply the best web developre jobs in india</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee</h3>
                              <form method="POST" action="">
                                  <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          Enter Name:
                                            <input type="text"   name="name" class="form-control" placeholder=" Full Name " value="" required="name"/>
                                        </div>
                                          Enter Email:
                                        <div class="form-group">
                                            <input type="email"   name="email" class="form-control" placeholder="email" value="" required="email" />
                                        </div>
                                          Create Password:
                                        <div class="form-group">
                                            <input type="password"  name="password" class="form-control" placeholder="Password" value=""  required="password" />
                                        </div>
                                        Enter Mobile Number:
                                        <div class="form-group">
                                          <input type="text"  name="mobile" class="form-control"  placeholder="number" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          Enter Address:
                                            <input type="text"   name="address" class="form-control" placeholder="Your address" value=""  required="address" />
                                        </div>
                                        <div class="form-group">
                                          Enter Gender:
                                            <select class="form-control" name="sex" >
                                               <option class="hidden" selected disabled>Please select your gender</option>
                                               <option>male</option>
                                               <option>female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                           Your Education
                                            <select class="form-control"  name="education">
                                                <option class="hidden" selected disabled>select education</option>
                                                <option>B.Tech</option>
                                                <option>M.Tech</option>
                                                <option>BCA</option>
                                                <option>MCA</option>
                                                <option>BSC(CSE)</option>
                                                <option>MSC(CSE)</option>
                                                <option>MBA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          Enter Your Intrest Area:
                                            <select class="form-control"  name="course">
                                                <option class="hidden" selected disabled>Please select your intrest area</option>
                                                <option>Web Developer</option>
                                                <option>Web designer</option>
                                                <option>graphic designer</option>
                                                <option>digital marketing</option>
                                                <option>software developer</option>
                                                <option>machine learning</option>
                                                <option>artificial intelligance </option>
                                                <option>search engine optimization</option>
                                            </select>
                                        </div>
                                         <div>
                                        <input type="submit" name="submit" class="btnRegister"  value="Register"/>
                                      </div>
                                    </div>
                                </div>
                              </form>
                            </div>
                          </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
