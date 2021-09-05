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

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 

<form action="" method="POST">
	<input type="text" name="name" placeholder="fullname">
    <input type="submit" name="submit" value="submit">
</form>

 </body>
 </html>