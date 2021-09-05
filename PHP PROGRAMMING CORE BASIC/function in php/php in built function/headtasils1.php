<?php 

for ($a=1;$a<=100;$a++){
$randnumber=rand(1,2);
    echo "$randnumber ";
    if($randnumber==1)
    echo "heads, i win </br>";
    else
    echo"tails you win </br>";
}

?>