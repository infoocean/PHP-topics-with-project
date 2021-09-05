
<?php
session_start();

$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="information";

//connect database
$conn = mysqli_connect( $servername , $username, $password , $databasename);

if (isset($_GET['id'])) {
  # code...
  $ids =  $_GET['id'];
  
  $select = "select * from employ where id = $ids";

  $result = mysqli_query( $conn, $select);

  $numofrows = mysqli_fetch_assoc($result);

  $username = $numofrows['username'];
  $password = $numofrows['password'];

}


if (isset($_POST['submit'])) {
  # code...
  $newusername = $_POST['username'];
  $newpassword = $_POST['password'];

  $updatedata = "update  employ set username = '$newusername', password = '$newpassword' where id = $ids";

  mysqli_query($conn, $updatedata);

 header('location:select_data.php');
 die();
}


?>


<html>
<head>
<tittle></tittle>
</head>
<body>
  <div>
     <center>
        <h1>update data</h1>
     </center>
     <center>
       <form method="POST">
           Enter username:
           <input type="text" name="username"  value="<?php echo $username ;?>" required="username" placeholder="username">
           </br></br>
           Enter password:
           <input type="password" name="password" value="<?php echo $password ;?>" required="password" placeholder="password">
           </br></br>
           <input type="submit" name="submit" value="update">
        </form>
      </center>
  </div>
</body>
</html>
