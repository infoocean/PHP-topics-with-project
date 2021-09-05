<?php
session_start();
$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="information";

//connect database
$conn = mysqli_connect($servername, $username, $password, $databasename);

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password = $_POST['password']; 
//check email is exists in database  or no
$search_email="select * from employ where email='$email'";
//query fire
$result=mysqli_query($conn,$search_email);
//count email in database
$countemail=mysqli_num_rows($result);
//if email is exists then condition
if ($countemail==1) {
  # code...
  //access password from stored in database
  $emailpassword=mysqli_fetch_array($result);
  //access password
  $database_password=$emailpassword['password'];
  //password verify
  $verify_pass=password_verify($password, $database_password);
  //check
  if ($verify_pass) {
    # code...
    $_SESSION['username']=$emailpassword['username'];
    header('location:homepage.php');
  }else{
    echo "<center>password incorrect</center>";
  };
 }else{
  echo "<center>Please enter valid email</center>";
 }
};
?>

<html>
<head>
<tittle></tittle>
</head>
<body>
  <div>
     <center>
        <h1>simple Login form</h1>
     </center>
     <center>
       <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
           Enter Email:
           <input type="email" name="email" value="" required="email" placeholder="email">
           </br></br>
           Enter Password:
           <input type="text" name="password" value=" " required="password" placeholder="password">
           </br></br>
           <input type="submit" name="submit" value="Login">
        </form>
      </center>
  </div>
</body>
</html>
