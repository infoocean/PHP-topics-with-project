<?php

$a=1;
$b=50;
for($a=1;$a<=$b;$a++){
   if($a%3==0){
       echo "fizz </br>";
   }
   else if($a%5==0){
       echo "buzz</br>";
   }
   else if($a%8==0){
       echo "fizzbuzz</br>";
   }
   else{
       echo "$a</br>";
   }
}

?>