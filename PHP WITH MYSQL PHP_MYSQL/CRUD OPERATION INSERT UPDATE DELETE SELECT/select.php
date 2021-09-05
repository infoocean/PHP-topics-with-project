<?php
$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="student_information";

//connect database
$conn=mysqli_connect($servername, $username, $password, $databasename);
//select query
 $select_query="select * from userdata";
// query fire
 $res = mysqli_query($conn,$select_query);
//fetch data
 $data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<h3>Insert New Data: <a href="index.php">Insert</a></h3>
	</div>
<div>
<center>	
<table border="1">
	<thead>
		<tr>
			<th>SE.NO.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th style="color:red;" colspan="10">Operation</th>
		</tr>
	</thead>
	<tbody>
		<?php
        $i=1;
        while ($data=mysqli_fetch_assoc($res)) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $data['name']; ?></td>
	    	<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><a href="update.php?id=<?php echo $data['id'];?>">update</a></td>
			<td><a href="delete.php?id=<?php echo $data['id'];?>">delete</a></td>
		</tr>
      <?php	
       $i++;	
	   };
	  ?>
	</tbody>
</table>
</center>
</div>
</body>
</html>