<?php


session_start();
// server details

$servername = "127.0.0.1:3307";

$username = "root";

$password = "";

$database_name = "crudoperation";

// connection
$connection = mysqli_connect($servername, $username, $password, $database_name);

?>