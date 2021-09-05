<?php
//INCLUDE database connection file
include 'database/dbconn.php';
//select query
$select_query="select *from student";
//query fire
$result=mysqli_query($conn,$select_query);
//fetch data from database
$fetchdata=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
    <center><h2>student data for web development feild</h2></center>
</div>
<div style="padding-left: 150px;">
<table border="1px">
    <thead>
        <tr>
           <td>Se.Nu.</td>
           <td>Student Name</td>
           <td>Student Father Name</td>
           <td>student Father Name</td>
           <td>City</td>
           <td>State</td>
           <td>Coountry</td>
           <td>Email</td>
           <td>Course</td>
           <td>Branch</td>
           <td style="color: red;" >Operation</td>
        </tr>
     </thead> 
     <tbody>
      <?php   //using while loop display for multiple data rows
      $i=1;
       while ($fetchdata=mysqli_fetch_array($result)){?>
     <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $fetchdata['name']; ?></td>
        <td><?php echo $fetchdata['father_name']; ?></td>
        <td><?php echo $fetchdata['mother_name']; ?></td>
        <td><?php echo $fetchdata['city']; ?></td>
        <td><?php echo $fetchdata['state']; ?></td>
        <td><?php echo $fetchdata['country']; ?></td>
        <td><?php echo $fetchdata['email']; ?></td>
        <td><?php echo $fetchdata['course']; ?></td>
        <td><?php echo $fetchdata['branch']; ?></td>
        <td><a href="update.php?id=<?php echo $fetchdata['id'];?>">update</a></td>
    </tr>
    </tbody>
    <?php 
    $i++;
     }
    ?>
</table>
</div>
</body>
</html>
