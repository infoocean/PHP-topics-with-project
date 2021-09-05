<?php          
Include 'connect.php';
//when id is select then this function is set
if (isset($_GET['id'])) {
  # code...
  $ids = $_GET['id']; // here id assign in a variable using $_get ke throw
  // delete query
  $delete_query = "delete  from user_information where id ={$ids}";
  ///queryfire
  $res =mysqli_query($conn, $delete_query);
   header('location:allshowdataselect.php');
   die();
}

?>