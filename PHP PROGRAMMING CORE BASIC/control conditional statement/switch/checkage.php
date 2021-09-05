<?php

$age = 56;
switch(true){
case ($age<=80 && $age>=100):
    echo"you are eligble to all ";
break;
case ($age<=50 && $age>=80):
    echo "you are eligble to play movie";
break;
 case( $age>=25 || $age<5):
    echo "you are play natak";
 break;  
 case($age<=18):
    echo "cartoon";
 break;
 
}
?>