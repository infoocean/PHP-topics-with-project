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
       <form method="POST">
           Enter username:
           <input type="text" name="username" value=" " required="username" placeholder="username">
           </br></br>
           Enter password:
           <input type="password" name="password" value="" required="password" placeholder="password">
           </br></br>
           <input type="submit" name="submit" value="Register">
        </form>
      </center>
  </div>
</body>
</html>

<?php
session_start();


$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="information";

//connect database
$conn = mysqli_connect( $servername , $username, $password , $databasename);

//check connection

if($conn){
  echo "connection successfull<br>";
}
else {
    echo " connection unsuccessfull";
}

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$insert_query = "insert into employ (username, password) values ('$username', '$password')";

$res = mysqli_query( $conn, $insert_query);
 
 if ($res) {
   # code...
  echo "data inserted";

  header('location:select_data.php');
  die();
 }
 else{
  echo "data notinserted";
 }
}
?>