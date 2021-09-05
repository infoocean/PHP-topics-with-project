
<?php
session_start();

$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="information";

//connect database
$conn = mysqli_connect( $servername , $username, $password , $databasename);

//check connection

$id=$_GET['id'];

$delete_query = "delete from employ where id = $id";

mysqli_query($conn, $delete_query);

header('location:select_data.php');
die();

?>