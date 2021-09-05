<?php
session_start();

$servername="127.0.0.1:3307";
$username="root";
$password="";
$databasename="information"; 

//connect database
$conn = mysqli_connect( $servername , $username, $password , $databasename);

//select query
 $select_query = "select * from  employ";

 $res = mysqli_query($conn, $select_query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     if you want to add record please click here:
    <a href="insert_data.php" style="font-size: 25px;">insert data </a>
<p><b><u>this is a selecting data</u></b></p>
     <table border="2px">
     <thead>
     	<tr>
        <td>se.no</td>		
     	<td>username</td>
     	<td>password</td>
        <td>operation</td>	
     	</tr>
     </thead>
        
        <?php
            $i = 1;
        while($numofrows = mysqli_fetch_assoc($res)){?>
    <tbody>   
        <tr>
        <td><?php echo $i; ?></td>   
        <td><?php  echo $numofrows['username'];?></td>     
        <td><?php  echo $numofrows['password'];?></td>
        <td>
            <a href="update_data.php?id=<?php echo $numofrows['id'];?> ">update</a> &nbsp;
            <a href="delete_data.php?id=<?php echo $numofrows['id'];?>">delete</a>
        </td>  
        </tr>
    </tbody>  

       <?php
         $i++;

        }




         ?>        



     </table>

</body>
</html>
