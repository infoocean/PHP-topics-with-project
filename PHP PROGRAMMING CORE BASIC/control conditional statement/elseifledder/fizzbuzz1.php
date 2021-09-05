<?php

$a=1;
$b=100;
for($a=1;$a<=$b;$a++){
   if($a%3==0 && $a%5==0){
       echo "fizzbuzz </br>";
   }
   else if($a%2==0){
       echo "fizz</br>";
   }
   else if($a%9==0){
       echo "buzz</br>";
   }
   else{
       echo "$a</br>";
   }
}

?>