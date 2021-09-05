<?php
// server details
//server name
$servername="127.0.0.1:3307";
//username
$username="root";
//password
$password="";
//database name
$databasename="information";

//connect database
$conn=mysqli_connect($servername,$username,$password,$databasename);

//check connection

if($conn){
    echo "connection successfull";
}
else {
    echo " connection unsuccessfull";
}

?>