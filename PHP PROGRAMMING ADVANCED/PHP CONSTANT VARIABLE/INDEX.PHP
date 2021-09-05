<?php

define('servername','127.0.0.1:3307');
define('username', 'root');
define('password','' );
define('dbname', 'rpatechnology');

$conn = mysqli_connect(servername,username,password,dbname);

if ($conn) {
	# code...
}else{
	echo no;
}

?>