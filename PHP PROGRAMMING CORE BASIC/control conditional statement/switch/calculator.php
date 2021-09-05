<?php

echo "entyer your choice </br>";

echo "1. addition</br>";
echo "2. subtraction</br>";
echo "3. multiplication</br>";
echo "4. division</br>";
echo "5. modules</br>";
echo "6. power</br>";

$var =6;
$x=6;
$y=5;
$z=null;
switch($var){

    case 1:
        $z=$x+$y;
        echo " the addition is $z";
    break;
    case 2:
        $z=$x-$y;
        echo "nultiplication is $z";
    break;
    case 3:
        $z=$x*$y;
        echo "the multiplication is $z";
    break;
    case 4:
        $z=$x/$y;
        echo "the division is $z";
    break;
    case 5:
        $z=$x%$y;
        echo "the reminder is:$z";
    break;
    case  6:
        $z=$x**$y;
        echo "the power is : $z";
    break;
    default:
    echo "please enter valid choice";
}

?>