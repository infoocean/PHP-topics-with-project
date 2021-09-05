<?php
session_start();
session_destroy();
setcookie('emailcookie',NULL,time()-100);
setcookie('passwordcookie',NULL,time()-100);
header('location:index.php');
die();
?>