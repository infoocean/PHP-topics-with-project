<?php
 include 'database/connection.php';
$email=$_SESSION['email'];

if (isset($_POST['submit'])) {
          # code...
          $taskname=$_POST['taskname'];
          $status=$_POST['status'];

          $update="update usertable set task='$taskname', status='$status' where email='$email'";
          $res=mysqli_query($conn,$update);
          if ($res) {
            # code...
            ?>
            
            <?php
          }
        }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" 
   href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
   integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
   crossorigin="anonymous"/>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>welcome to hackerkernal</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-danger " href="#"><b> hackerkernal</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
       <h1>welcome : </h1>
       <ul style="list-style: none;">
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 20px;"><i class="fas fa-user"></i> <?php  echo $_SESSION['user']; ?> </a>
      </li>
    </ul>
    <button  class=" btn btn-primary"><a href="logout.php" style="color: white;">Logout</a></button>
</nav>
    </div>
    <div class="container">
      <div class="jumbotron">
  <h1 class="display-4">Hello, welcome to hacker kernal</h1>
  <p class="lead">apply for internship amd jobs</p>

   <div>
    <?php
    $select="select * from usertable where email='$email'";
    $query=mysqli_query($conn,$select);
    $data=mysqli_fetch_array($query);
    $tasknames=$data['task'];
    $statuss=$data['status'];
    ?>
    <p style="color: red;">hello, <?php echo $_SESSION['user']; ?> your Task is : <?php echo "<b>$tasknames</b>";?> and status is : <?php echo "<b>$statuss</b>";?></h3>
  </div>

  <hr class="my-4">
<div>
  <center>
    <h4>please select the task and submit</h4>
    <?php
    //fetch data
    $selectdata="select * from tasktable";
    //query
    $result=mysqli_query($conn, $selectdata);
    ?>

     <table border="3" style="font-size: 18px;">
       <thead>
         <tr style="background-color: blue; color: white">
           <td>Task Name</td>
           <td>status</td>
         </tr>
       </thead>
       <tbody>
          <form method="POST">
        <?php
         while ( $fetchdata=mysqli_fetch_array($result)) {?>
           <tr>
           <td><input type="radio" name="taskname" value="<?php echo $fetchdata['taskname'];?>"><?php echo $fetchdata['taskname'];?></td>
           <td>
              <input type="radio" name="status" value="Pending"> Pending
              <input type="radio" name="status" value="Done"> Done
              <input type="submit" class="btn btn-danger p-1" name="submit" value="submit">
           </td>
         </tr>
         <?php
         }
         ?>
          </form>
       </tbody>
     </table>

  </center>
</div>

</div> 
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>