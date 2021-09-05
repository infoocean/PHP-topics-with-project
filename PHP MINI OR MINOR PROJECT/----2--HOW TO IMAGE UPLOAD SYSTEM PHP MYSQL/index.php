<?php
//include db connection file
include 'db/dbcon.php';
//access data from user input
//this function is set when user click the submit button
if (isset($_POST['submit'])) {
    # code...
   //find data when user submit the form
    //name access 
    $name=$_POST['name'];
    //access email
    $email=$_POST['email'];
    //acess password
    $password=$_POST['password'];
    //access number
    $number=$_POST['number'];

    //access image files using image name input feild
    $image=$_FILES['image'];
    //access all image information with helps the print_r() function
   //access image name
    $image_name=$image['name'];
    //access image type
    $image_type=$image['type'];
    //access image tmp name
    $image_tmpname=$image['tmp_name'];
    //access image size
     $image_size=$image['size'];
     //access error
     $image_error=$image['error'];

     //check image in error or not
     if ($image_error==0) {
          # code...
      //choos destination folder where image store in the server
         $destfile = 'imagefolder/'.$image_name;
        //uplodded in folder 
         move_uploaded_file($image_tmpname, $destfile);
         //insert all the information in a dataabse but case of image only image name inserted not images
         //insert query
         $insert="insert into customer_information(name, email, password, number, image)values('$name', '$email', '$password', '$number', '$destfile')";
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
    <h4 class="card-title mt-3 text-center">Create Account then Roomdekho </h4>
     <p class="divider-text text-center">
        <span class="bg-light">Best Platform In The India</span>
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
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="password" required class="form-control" placeholder="Create password" type="password">
    </div>
     <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-mobile"></i> </span>
        </div>
        <input name="number" required class="form-control" placeholder="Mobile Number" type="text">
    </div>
     <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-home"></i> </span>
        </div>
        <input name="city" required class="form-control" placeholder="city" type="text">
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
    <p class="text-center">Allready Registered Search Your  Profile <a href="display.php">Profile</a>            
  </form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>