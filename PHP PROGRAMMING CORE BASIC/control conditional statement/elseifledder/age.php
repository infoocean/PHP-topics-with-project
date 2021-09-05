<?php

$age = 17;

if($age<=5){
    echo "baby </br>";
}
else if($age<=18){
    echo "child</br>";
}
else if($age<=25){
    echo "student</br>";
}
else if($age<=50){
    echo "young</br>";
}
else if($age<=100){
    echo "old </br>";
}
else
{
    echo "please enter valid age";
}
?>