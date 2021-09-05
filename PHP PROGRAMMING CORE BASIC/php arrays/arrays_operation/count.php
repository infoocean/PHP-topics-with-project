<?php 

//arrays count() function
$name=array("shubham","kumar","jaiswal","btech", "cse","bhopal","mp");
$array_length=count($name);
echo "the length is:$array_length";
echo "</br>";

$number=array(10,30,50,4,6,44,55,6,3,44,6,33,7,7,33,44,5,6,88,77,44,7,5);
$aray_length=count($number);
echo "the length is $aray_length";
$number[25]=30;
$number[30]=40;
echo "</br>";

$aray_length=count($number);
echo "the length is $aray_length";
echo "</br>";
echo $number[30];
echo"</br>";
echo"<pre>";
print_r($number);


?>