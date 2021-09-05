<?php

include('../database_connection.php');

if (isset($_GET['id'])) {
	# code...

$ids=$_GET['id'];

$delete_query = "delete from employ where id = $ids";

mysqli_query($connection, $delete_query);

header('location:mainworker.php');
die();


}



?>