<?php          
Include 'connect.php';
//select_query
//when id is select then this function is set
if (isset($_GET['id'])) {
  # code...
  $ids = $_GET['id']; // here id assign in a variable using $_get ke throw
  // select query
  $select_query ="select * from user_information where id ={$ids}";
  ///queryfire
  $res=mysqli_query($conn, $select_query);
  //fetch data ia a array from
  $data = mysqli_fetch_array($res);
  // assign all data in a variable with helps to table using $data variable 
  $name = $data['name'];
  $email = $data['email'];
  $password = $data['password'];
  $mobile = $data['mobile'];
  $address = $data['address'];
  $sex = $data['sex'];
  $education = $data['education'];
  $course = $data['course'];
}

// if when user update in a data so when click submit button then this function is set
if (isset($_POST['submit'])) {
  # code...
$newname = $_POST['name'];
$newemail = $_POST['email'];
$newpassword = $_POST['password'];
$newmobile = $_POST['mobile'];
$newaddress = $_POST['address'];
//if this function is set when sex is select or submit
if (isset($_POST['sex'])) {
  # code...
  $newsex =$_POST['sex'];
}else{
   $newsex ='';
}
//if this function is set when education is select or submit
if (isset($_POST['education'])) {
  # code...
  $neweducation =$_POST['education'];
}else{
   $neweducation ='';
}
//if this function is set when course is select or submit
if (isset($_POST['course'])) {
  # code...
  $newcourse =$_POST['course'];
}else{
   $newcourse ='';
}

// update query
$update_query ="update user_information set name ='$newname', email ='$newemail',
 password ='$newpassword', mobile ='$newmobile', address ='$newaddress', sex ='$newsex',
 education ='$neweducation', course ='$newcourse' where id ={$ids}";
// queryfire
$update = mysqli_query($conn, $update_query);
header('location:allshowdataselect.php');
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
                        <input type="submit" name="" value="Login"/><br/>
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
                                            <input type="textbox"   name="name" class="form-control" placeholder=" Full Name " value=" <?php echo $name=$data['name'];?> " required="name"/>
                                        </div>
                                          Enter Email:
                                        <div class="form-group">
                                            <input type="email"     name="email" class="form-control" placeholder="email"    value="<?php echo $email = $data['email'];  ?>" required="email" />
                                        </div>
                                          Create Password:
                                        <div class="form-group">
                                            <input type="password"  name="password" class="form-control" placeholder="Password" value=" <?php echo $password = $data['password'];  ?>"  required="password" />
                                        </div>
                                        Enter Mobile Number:
                                        <div class="form-group">
                                            <input type="number"     name="mobile" class="form-control"  placeholder=""       value="<?php  echo $mobile = $data['mobile'];  ?>" required="mobile" minlength = "10"  maxlength ="10" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          Enter Address:
                                            <input type="textbox"   name="address" class="form-control" placeholder="Your address" value="<?php echo $address = $data['address'];  ?>"  required="address" />
                                        </div>
                                        <div class="form-group">
                                          Enter Gender:
                                            <select class="form-control" name="sex" ?>" >
                                               <option class="hidden"  selected disabled>Please select your gender</option>
                                               <option>male</option>
                                               <option>female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                           Your Education
                                            <select class="form-control"  name="education">
                                                <option class="hidden"  selected disabled>select education</option>
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
                                                <option class="hidden"  selected disabled>Please select your intrest area</option>
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