<?php 

 if (isset($_GET['submit'])) {
 	# code...
 echo "<pre>";
 	print_r($_GET);//its return all data in array form
   echo "</pre>";

   $name=$_GET['name'];

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
 

<form action="" method="GET">
	<input type="text" name="name" placeholder="fullname">
    <input type="submit" name="submit" value="submit">
</form>

 </body>
 </html>