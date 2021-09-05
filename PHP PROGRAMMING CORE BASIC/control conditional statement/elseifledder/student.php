<?php

$per = 86;

if($per<=100 && $per>=80){
    echo "merit A++ </br> <u>your percentage is: </u> $per </br>";
}
elseif($per<=79 && $per>=70){
    echo "first A+ </br> <u>your percentage is: </u> $per </br>";
}
elseif($per<=69 && $per>=50){
    echo  " 1st A </br> <u>your percentage is: </u> $per </br>";
}
elseif($per<=49 && $per>=45){
    echo "2nd B  </br> <u>your percentage is: </u> $per </br>";
}
elseif($per<=44 && $per>=33){
    echo "3rd  C </br> <u>your percentage is: </u> $per </br>";
}
elseif($per<33){
    echo "fail </br> <u>your percentage is: </u> $per </br>";
}
else
{
    echo "please enter valid percentage";
}
?>