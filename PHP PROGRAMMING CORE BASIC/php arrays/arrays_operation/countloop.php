<?php 

//arrays count() function
$name=array("shubham","kumar","jaiswal","btech", "cse","bhopal","mp");
$array_length=count($name);
echo "the length is:$array_length";

for ($i=0; $i<=$array_length;$i++){
    echo"</br>";
    echo $name[$i];
}





?>