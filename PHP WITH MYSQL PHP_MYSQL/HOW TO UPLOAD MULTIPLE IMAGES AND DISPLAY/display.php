<?php
 
 include 'database/dbconn.php';

$select = "select * from multiple_image";

$query=mysqli_query($conn, $select);

$numofrows=mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<p><center><u>totel number of data = <?php echo $numofrows; ?></u></center></p>
</head>
<body>
<center>
<table border="2px" bgcolor="yellow" >
	<thead>
	  <tr>
		<th>Se. No.</th>
		<th>name.</th>
		<th>email</th>
		<th>position</th>
		<th>image</th>
	</tr>
	</thead>
	<tbody>
		<?php
		$i=1;
		while ($data=mysqli_fetch_array($query)) { ?>
		<tr>
			<td><?php echo "$i"; ?></td>
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['email'];?></td>
			<td><?php echo $data['feild'];?></td>
			<td> <img style="width: 100px; height: 100px;" src="<?php echo $data['image'];?>"></td>
		</tr>
		<?php
		$i++;
	     }
	    ?>
	</tbody>
</table>
</center>
</body>
</html>