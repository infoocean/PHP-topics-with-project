<?php
// to mail means receiver mail
$to_mail="sj8464736@gmail.com";
//purpuse
$subject="simple mail send via  a php language";
//description
$body="hiii, this is a simple mail send trial";
//mail sender
$headers="from: sj2585097@gmail.com";

if (mail($to_mail,$subject,$body,$headers)) { 
	# code...
	echo "mail send success : $to_mail";
}else{
	echo "mail unsend";
}

?>