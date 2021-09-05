<?php

//string simple example 
echo "shubham kuamr jaiswal</br>";  //using double quation mark
echo 'sushil kumar jaiswal</br>';   //using single quation mark

// using variable 
$name="shubham kuamar jaiswal ";

$names='sushil kumar jaiswal';

echo "$name </br> ";

echo " my father name is $names </br>"; //correct method 

echo 'my name is $name </br>';                 // in correct calling variables

echo 'my name is  '.$name.'</br>';       //corerect method
$age = 20;
echo "my name is $name and my fathe name is $names or my age $age</br>";
echo 'my name is  '.$name.'  and my father name is '.$names.' or my age  '.$age.' </br>';
echo $age ;
echo $name;
echo $name.$names.$age                    //one or more variables
echo $name.' '.$names;

?>