<?php
// server details
//server name
$servername="127.0.0.1:3307";
// server username
$username="root";
// server password
$password="";
//database name
$databasename="students";

//connect server with database
$connect = mysqli_connect( $servername , $username, $password, $databasename);

//check connection

if($connect){
  echo "connection successfull";
}
else{
    echo "connection unsuccessfull";
};

?>

 


