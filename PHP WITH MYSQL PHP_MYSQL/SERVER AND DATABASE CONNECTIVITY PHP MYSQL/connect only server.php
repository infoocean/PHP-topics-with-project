<?php
// server details
// srever name
$servername = "127.0.0.1:3307";
//username
$username = "root";
//password
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>