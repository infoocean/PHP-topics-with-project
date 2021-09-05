<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	#form{
		display: flex;
		justify-content: center;
		flex-direction: column;
		align-items: center;
	}
	.button{
		width: 200px;
		font-size: 20px;
		color: green;
		background-color: lightblue;
	}
</style>
</head>
<body>
<div id="form">

	<div class="login">
		<h2>Login</h2>
         <form action="validation.php" method="post">
         <p>USERNAME</p>
         <input type="text" name="username" value="" required="" placeholder="username"><br><br>
         <p>PASSWORD</p>
         <input type="text" name="password" value="" required="" placeholder="password"><br><br>
         <input type="submit" name="submit" value="login" class="button">
         </form>
	</div>

	<div class="signin">
		<h2>Signin</h2>
         <form action="registration.php" method="post">
         <p>USERNAME</p>
         <input type="text" name="username" value="" required="" placeholder="username"><br><br>
         <p>PASSWORD</p>
         <input type="text" name="password" value="" required="" placeholder="password"><br><br>
         <input type="submit" name="submit" value="signin" class="button">
         </form>
	</div>
	
</div>
</body>
</html>