
<?php
//INCLUDE database connection file
include 'database/dbconn.php';
//access id from grt method
if (isset($_GET['id'])) {
  # code...
  $ids=$_GET['id'];
  //select data from database using id
  $selectdata="select *from student where id=$ids";
//query fire
  $result=mysqli_query($conn,$selectdata);
//fetch data from database
  $fetchdata=mysqli_fetch_array($result);
  //access data and this data is used to form value attribute
  $name=$fetchdata['name'];
  $fname=$fetchdata['father_name'];
  $mname=$fetchdata['mother_name'];
  $city=$fetchdata['city'];
  $state=$fetchdata['state'];
  $country=$fetchdata['country'];
  $email=$fetchdata['email'];
  $course=$fetchdata['course'];
  $branch=$fetchdata['branch'];
};

if (isset($_POST['submit'])){
  # code...
  //access data from form
  $newname=$_POST['name'];
  $newfather_name=$_POST['fname'];
  $newmother_name=$_POST['mname'];
  $newcity=$_POST['city'];
  $newstate=$_POST['state'];
  $newcountry=$_POST['country'];
  $newemail=$_POST['email'];
  $newcourse=$_POST['course'];
  $newbranch=$_POST['branch'];
//updata data in database
  $updatedata="update student set name='$newname', father_name='$newfather_name', mother_name='$newmother_name', city='$newcity',
   state='$newstate', country='$newcountry', email='$newemail', course='$newcourse', branch='newbranch' where id=$ids";
//query fire
 $res=mysqli_query($conn, $updatedata);
 //check data update or no
if ($res) {
  # code...
  echo "<center><b>thank you for update</b></center>";
  header('location:index.php');
 die();
 };
};
?>

<html>
<head>
<tittle></tittle>
</head>
<body>
  <div>
    <center>
      <h1><b>Student update form</b></h1>
     </center>
     <center>
      <form action=""  method="POST"  enctype="">
           Enter Student Name:
           <input type="text" name="name" required="name" placeholder="name" value="<?php echo $fetchdata['name']; ?>" ><br>
           Enter Father Name:
           <input type="text" name="fname" required="father name" placeholder="father name" value="<?php echo $fetchdata['father_name']; ?>"><br>
             Enter Mother Name:
           <input type="text" name="mname" required="mname" placeholder="mname" value="<?php echo $fetchdata['mother_name']; ?>"><br>
           Enter City:
           <input type="text" name="city" required="city" placeholder="city" value="<?php echo $fetchdata['city']; ?>"><br>
             Enter State:
           <input type="text" name="state" required="state" placeholder="state" value="<?php echo $fetchdata['state']; ?>"><br>
           Enter Country:
           <input type="text" name="country" required="country" placeholder="country" value="<?php echo $fetchdata['country']; ?>"><br>
             Enter Email:
           <input type="email" name="email" required="email" placeholder="email" value="<?php echo $fetchdata['email']; ?>"><br>
           Enter Course:
           <input type="text" name="course" required="course" placeholder="course" value="<?php echo $fetchdata['course']; ?>"><br>
             Enter Branch:
           <input type="text" name="branch" required="branch" placeholder="branch" value="<?php echo $fetchdata['branch']; ?>"><br>
           <input type="submit" name="submit" value="update">
        </form>
      </center>
  </div>
</body>
</html>
