
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="" method="POST">

    Enter Name : <input type="textbox" name="name" required="name"><br>
    Create Password: <input type="Password" name="Password" required="Password"><br>
    gender:
      male:<input type="radio" name="gender" value="male" required="male">
      female:<input type="radio" name="gender" value="female" required="Password"><br>
      Enter City:
         <select name="city">
         	<option>select city</option>
         	<option>Bhopal</option>
         	<option>indore</option>
         	<option>rewa</option>
         	<option>satna</option>
         	<option>jabalpur</option>
         </select><br>
         Education:<br>
           B.tech <input type="checkbox" name="education" value="b.tech">
           Mtech <input type="checkbox" name="education" value="m.tech">
           Bsc<input type="checkbox" name="education" value="bsc">
           Msc <input type="checkbox" name="education" value="msc">
           Bca <input type="checkbox" name="education" value="bca">
           Msc<input type="checkbox" name="education" value="mca"><br>
    <input type="submit" name="submit">
          	
</form>



</body>
</html>



<?php
if (isset($_POST['submit'])) {
	# code...
	$name = ($_POST['name']);
	$Password = ($_POST['Password']);
	$city = ($_POST['city']);

	if (isset($_POST['gender'])) {
		# code...
		$gender = ($_POST['gender']);
	}else{
		$gender='';
	}

	if (isset($_POST['education'])) {
		# code...
		$education = ($_POST['education']);
	}else{
		$education =''; 
	}
	

    echo $name;
    echo $Password;
    echo $city;
    echo $education;
    echo $gender;

}

?>