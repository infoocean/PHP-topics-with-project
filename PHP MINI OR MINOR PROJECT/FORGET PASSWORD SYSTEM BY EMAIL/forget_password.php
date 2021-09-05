<?php
//include db connection file
include 'database/dbconn.php';
//access data from user input
if (isset($_POST['submit'])) {
	# code...
	//find data
	$email=$_POST['email'];
     # code... 
     //check email validation email is aready exists or not in database
     $search_email="select * from email_verification where email='$email'";
     //query fire
     $result=mysqli_query($conn, $search_email);
     //count email in database row
     $countemail=mysqli_num_rows($result);
     ///check
     if ($countemail==1) {
    # code...
        //access username
        $fetchdata=mysqli_fetch_array($result);
        $username=$fetchdata['name'];
        $token=$fetchdata['token'];
     	//send link from mail
     	//Receiver mail
     	$to_mail=$email;
     	//pupose for mail
     	$subject="reset password link";
     	//description
     	$body="hello, $username this is a forget password link please click here this link expire in 10 minits
        http://localhost:8090/forget%20password%20system%20by%20email/reset_password.php?token= $token ";
     	//mail sender
     	$headers="from :sj2585097@gmail.com";
     	// check mail function
     	$check=mail($to_mail, $subject, $body, $headers);
        
     	if ($check) {
     		# code...
     		echo "<center>check your email for forget password link</center>";
     	  };
    }else{
     echo "<center> this email id is not exists</center>";
    };
  };
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">send email for forget password</h4>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="">
	<!-- form-group// -->
	  <lable><b>Enter Email Address:</b></lable>
    <div class="form-group input-group">
    	<input type="email" name="email" class="form-control" placeholder="Email address" required="email">
    </div>
      <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Send</button>
   </div>                                                            
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>


