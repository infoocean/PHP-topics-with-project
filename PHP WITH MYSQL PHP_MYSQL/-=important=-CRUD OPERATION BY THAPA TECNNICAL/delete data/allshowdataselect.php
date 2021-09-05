<?php
Include 'connect.php';
// select data
$select_query = "select * from user_information";
//query fire
$res = mysqli_query($conn, $select_query);
// check rows in a database
$numofrows= mysqli_num_rows($res);
echo "num of data in a database $numofrows";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>employ registration form</title>
  </head>
  <body>

<div class="container-fluid ">
	<div class="container">
  	<table border="2px">
  		<thead>
  		    <tr>
  			     <td> Se.No. </td>
             <td> id </td>
  			     <td> Name </td>
  			     <td> email Id </td>
  			     <td> Password </td>
  			     <td>Mobile number</td>
  			     <td>Address</td>
  			     <td>Gender</td>
  			     <td>Education</td>
  			     <td>Course</td>
            <td>operation</td>
  		    </tr>
  	    </thead>
  	    <tbody>
  	    	<?php
              $i=1;
  	    	while ($data =mysqli_fetch_array($res)) { ?>
  	    	<tr>
  	    		 <td> <?php echo $i; ?></td>
              <td> <?php echo $data['id']; ?></td>
  			     <td> <?php echo $data['name']; ?> </td>
  			     <td> <?php echo $data['email']; ?>  </td>
  			     <td> <?php echo $data['password']; ?>  </td>
  			     <td> <?php echo $data['mobile']; ?> </td>
  			     <td> <?php echo $data['address']; ?> </td>
  			     <td> <?php echo $data['sex']; ?> </td>
  			     <td> <?php echo $data['education']; ?> </td>
  			     <td> <?php echo $data['course']; ?> </td>
             <td>
              <a href="deletedata.php?id=<?php echo $data['id'];?>"> delete </a>
             </td>
  	    	</tr>
  	    	<?php
  	    	   $i++;
  	    	   }
  	    	?>
  	    </tbody>
  	</table>
  </div>
</div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
