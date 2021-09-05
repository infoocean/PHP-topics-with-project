<?php
//include db connection file
include 'database/dbconn.php';
//access data from user input
if (isset($_POST['submit'])) {
    # code...
    //find data
    //name access 
    $name=$_POST['name'];
    //access email
    $email=$_POST['email'];
    //acess positiopn
    $feild=$_POST['feild'];
    //access password
    $password=$_POST['password'];

    //access files
      //access image 
    $image=$_FILES['image'];
    //access all image information with helps the $image = $_files['image'].
   //access image name
    $image_name=$_FILES['image']['name'];
    //access image type
    $image_type=$_FILES['image']['type'];
    //access image tmp name
    $image_tmpname=$_FILES['image']['tmp_name'];
    //access image size
     $image_size=$_FILES['image']['size'];
     //access error
     $image_error=$_FILES['image']['error'];

     if ($image_error==0) {
          # code...
         $destfile = 'imagefolder/'.$image_name;

         //uplodded in folder 
         move_uploaded_file($image_tmpname, $destfile);

         //insert query
         $insert="insert into multiple_image(name,email,password,feild,image)values('$name', '$email', '$feild', '$password', '$destfile')";
         //query fire
         mysqli_query($conn, $insert);

      } ;

  };
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="container">

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-google"></i>   Login via Google</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="name" required class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" required class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
        </div>
        <select name="feild" class="form-control">
            <option selected=""> Select job type</option>
            <option>Designer</option>
            <option>Manager</option>
            <option>Accaunting</option>
                <option>Doctor</option>
            <option>Superviser</option>
        </select>
    </div> <!-- form-group end.// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="password" required class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// --> 
        <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-file"></i> </span>
        </div>
        <input name="image" required class="form-control" type="file">
    </div> <!-- form-group// -->                                     
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>
    <p class="text-center">view all data? <a href="display.php">view</a> </p>                                                              
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>