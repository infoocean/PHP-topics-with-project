<?php 

 if (isset($_POST['submit'])) {
 	# code...
 echo "<pre>";
 	print_r($_POST);//its return all data in array form
   echo "</pre>";

   $name=$_POST['name'];

   echo "name = $name";

//ACCESS ALL  THE SERVER INFORMATION 
   echo '<pre>';
   print_r($_SERVER); 
      echo '<pre>';
 }

 ?>