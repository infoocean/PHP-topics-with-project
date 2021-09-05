<?php

//for receiver mail
$to_mail="infoocean8454@gmail.com";

//what is the puepose of mail
$subject="simple mail sending for trial purpose";

//all mail description
$body="hell this mail is a incom tax depart ment so please inform you that this mail is a not verified the income tax department";

//mail sender
$headers="from: sj2585097@gmail.com";

//use mail() function php provides inbuilt mail() function for sending a mail
$mail_function=mail($to_mail, $subject, $body ,$headers);

//check mail send or not 
if ($mail_function) {
	# code...
	echo "mail send succuss : $to_mail";
}else{
    echo "unsend mail";
}

?>