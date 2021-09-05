<html>
<head>
<tittle></tittle>
</head>
<body>
  <div>
     <center>
        <h1>simple student registration form</h1>
     </center>
     <center>
       <form action=""  method="POST"  enctype="">
           Enter Student Name:
           <input type="text" name="name" required="name" placeholder="name"><br>
           Enter Father Name:
           <input type="text" name="fname" required="father name" placeholder="father name"><br>
             Enter Mother Name:
           <input type="text" name="mname" required="mname" placeholder="mname"><br>
           Enter City:
           <input type="text" name="city" required="city" placeholder="city"><br>
             Enter State:
           <input type="text" name="state" required="state" placeholder="state"><br>
           Enter Country:
           <input type="text" name="country" required="country" placeholder="country"><br>
             Enter Email:
           <input type="email" name="email" required="email" placeholder="email"><br>
           Enter Course:
           <input type="text" name="course" required="course" placeholder="course"><br>
             Enter Branch:
           <input type="text" name="branch" required="branch" placeholder="branch"><br>
           <input type="submit" name="submit" value="Register">
        </form>
      </center>
  </div>
</body>
</html>

<?php

//include database files
include 'database/dbconn.php';
//access input data
if (isset($_POST['submit'])) {
  # code...
  //access name
  $name=$_POST['name'];
  //access father name
  $fname=$_POST['fname'];
  //access mother name
  $mname=$_POST['mname'];
  //access city
  $city=$_POST['city'];
  //access stste
  $state=$_POST['state'];
  //access country
  $country=$_POST['country'];
  //access email id
  $email=$_POST['email'];
  //access course
  $course=$_POST['course'];
  // access branch
  $branch=$_POST['branch'];

// mysqli insert query
  $insert_query="insert into student(name,father_name,mother_name,city,state,country,email,course,branch)values('$name','$fname','$mname','$city','$state','$country','$email','$course','$branch')";
  //mysqli quiry fire
  $check=mysqli_query($conn,$insert_query);
  
  //check data insert or no
  if ($check) {
    # code..
    echo "<center>thanku for registration</center>";
  };
};
?>



