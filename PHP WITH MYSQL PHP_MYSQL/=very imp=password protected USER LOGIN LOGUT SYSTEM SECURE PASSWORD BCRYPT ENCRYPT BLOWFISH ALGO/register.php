<?php
session_start();
$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="information";

//connect database
$conn = mysqli_connect($servername, $username, $password, $databasename);

if(isset($_POST['submit'])){
$username = $_POST['username'];
$email=$_POST['email'];
$number=$_POST['number'];
$position=$_POST['position'];
$password = $_POST['password']; 

//check emai validation
$select="select * from employ where email='$email'";
//query fire
$res=mysqli_query($conn,$select);
//count email
$numofrows=mysqli_num_rows($res);
//condition
if ($numofrows==1) {
  # code...
  echo "<center>this email is already exists</center>";
}else{
// Secure password using Hashing (Blowfish algorithims)
  $secure_password=password_hash($password, PASSWORD_BCRYPT);
  //insert query
  $insert_query ="insert into employ(username, email, mobile, position, password)values('$username',
  '$email','$number','$position','$secure_password')";

   $res = mysqli_query( $conn, $insert_query);
 
   if ($res==1) {
   # code...
   echo "data inserted";
  //here session variable go to login.php page
    header('location:login.php');
     }else{
     echo "data notinserted";
     header('location:register.php');
    };
  };
};
?>

<html>
<head>
<tittle></tittle>
</head>
<body>
  <div>
     <center>
        <h1>simple registration form with connect database php mysql</h1>
     </center>
     <center>
       <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
           Enter username:
           <input type="text" name="username" value=" " required="username" placeholder="username">
           </br></br>
           Enter Email:
           <input type="email" name="email" value="" required="email" placeholder="email">
           </br></br>
           Enter MObile Number:
           <input type="text" name="number" value=" " required="number" placeholder="number">
           </br></br>
           Enter position:
           <input type="text" name="position" value="" required="position" placeholder="position">
           </br></br>
           Enter Password:
           <input type="text" name="password" value=" " required="password" placeholder="password">
           </br></br>
           <input type="submit" name="submit" value="Register">
        </form>
      </center>
  </div>
</body>
</html>
