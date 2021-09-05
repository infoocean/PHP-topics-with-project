<?php
//server details
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$databasename="students";

// Create server connection
$connect_server = mysqli_connect($servername, $username, $password);
// create database connection
$connect_database=mysqli_select_db($connect_server,$databasename);
// Check connection
if ($connect_database) {
    echo "Connected successfully";
}
else{
die("Connection failed: " . mysqli_connect_error());
}
?>