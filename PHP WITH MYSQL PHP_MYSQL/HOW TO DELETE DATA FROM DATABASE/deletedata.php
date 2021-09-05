
<?php
//connect db
include 'database/dbconn.php';
//get id 
if (isset($_GET['id'])) {
	# code...
  $ids=$_GET['id'];
//delete data throw id
  $delete_query="delete from student where id=$ids";
  //query fire
  mysqli_query($conn, $delete_query);
  header('location:index.php');
  die();
};
?>