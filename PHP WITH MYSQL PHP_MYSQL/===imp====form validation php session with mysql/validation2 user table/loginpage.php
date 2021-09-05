<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#form{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		p{
			font-size: 20px;
		}
		.button{
			width: 200px;
			background-color: blue;
			color: white;
			border-radius: 15px;
			font-size: 20px;
		}
		.content{
			font-size: 17px;
			color: red;
			font-weight: bold;
			font-variant: small-caps;
		}
	</style>
</head>
<body>
<div id="form">
	<div class="loginform">
		<form action="validation.php" method="POST">
          <p>Userid</p>	
          <input type="text" name="userid" value="" required="" placeholder="userid">
          <p>Password</p>
          <input type="text" name="password" value="" required="" placeholder="password"><br><br>
          <input class="button" type="submit" name="submit" value="login">	
		</form>
	</div>
		<div class="signinform">
		<form action="registration.php" method="POST">
		  <p class="content">if you are new user please register here</p>
          <p>Userid</p>	
          <input type="text" name="userid" value="" required="" placeholder="userid">
          <p>Password</p>
          <input type="text" name="password" value="" required="" placeholder="password"><br><br>
          <input class="button" type="submit" name="submit" value="signin">	
		</form>
	</div>
</div>
</body>
</html>