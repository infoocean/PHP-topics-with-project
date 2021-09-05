<?php
session_start();
//include database connectivity file
include 'db/dbcon.php';
//select all data from the database 
$selectdata="select *from customer_information";
//query fire
$queryfind=mysqli_query($conn, $selectdata);
//count the number of data
$numofrows=mysqli_num_rows($queryfind);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer data</title>
    <style type="text/css">
        thead{
            background-color:red;
            color:white;
        }
    </style>
</head>
<body style="background-color:darkblue; color:white;">
    <center><p>Totel Number of data : <?php echo $numofrows ?></p></center>
<center>
<div>
<table border="1">
	<thead>
		<tr>
		<td>Se.No.</td>
		<td>Name</td>
		<td>Email</td>
        <td>Password</td>
		<td>Number</td>
		<td>Image</td>
	  </tr>
    </thead>

    <tbody>
    	<?php
           $i=1;
           while ($data=mysqli_fetch_array($queryfind)) {
           	# code...  
    	?>
    	<tr>
    		<td><?php echo $i; ?></td>
    		<td><?php echo $data['name']; ?></td>
    		<td><?php echo $data['email']; ?></td>
    		<td><?php echo $data['password']; ?></td>
            <td><?php echo $data['number']; ?></td>
    		<td><img style=" width:80px;height: 70px;" src="<?php echo $data['image'];?>"></td>
    	</tr>
    	<?php
         $i++;
        };
      ?>
    </tbody>
    
 </table>
</div>
</center>
</body>
</html>