<?php
//include database file using require statement
//if this file in  any error  so, stop the script next code wiil we not exetud
require 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
//include the link file
//if any error this file show the error 
//then next all the code will we executed 
 include 'alllink.php';
?>
</head>
<body>
<header>
   <article>	
	<?php
     require 'header.php';
	?>
</article>
</header>


<div>
	<div>
		<div>
			<?php
			include 'contrnt.php';
			?>
		</div>
	</div>>
</div>>

<footer>
	<p>
		<?php
        require 'footer.php';
		?>
	</p>
</footer>
</body>
</html>