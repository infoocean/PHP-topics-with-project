<?php

include '../database_connection.php';

$selectdata = "select * from employ";

$select_query = mysqli_query($connection, $selectdata);

$numofdata = mysqli_num_rows($select_query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>welcome:<?php echo $_SESSION['user'];  ?></h1>
  <h4>Total Records : <?php echo $numofdata; ?> </h4>
  <table border="1px">
  	<thead>
  	  <tr>
  		<th>Se.Nu.</th>
  		<th>First Name</th>
  		<th>Last Name</th>
  		<th>Email Id</th>
  		<th>Mobile Number</th>
  		<th>Gender</th>
  		<th>City</th>	
      <th>Operation</th>
  	  </tr>
  	</thead>

    <tbody>
    
      	<?php 
      	$i=1;
      	while($numofrows = mysqli_fetch_assoc($select_query)) { ?>
          <tr>	
        <td><?php echo "$i";  ?></td>
    	<td><?php echo $numofrows['firstname'];?></td>
    	<td><?php echo $numofrows['lastname'];?></td>
    	<td><?php echo $numofrows['email'];?></td>
    	<td><?php echo $numofrows['mobile_nu'];?></td>
    	<td><?php echo $numofrows['sex'];?></td>
    	<td><?php echo $numofrows['city'];?></td>
      <td><a href="deletedata.php?id=<?php echo $numofrows['id'];?>"><b>Delete</b></a></td>
    </tr>
  <?php
    
    $i++;
    }

    ?> 

   
    </tbody>
  </table>

</body>
</html>