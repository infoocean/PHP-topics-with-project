<?php

$age = 18;
if ($age<=25 && $age>=15){
    echo "eligble";
}
echo "</br>";
$age = 8;
if ($age<=25 || $age>=15){
    echo "eligble";
}

echo "</br>";
$age = 13;
if ($age<=25 xor $age>=15){
    echo "eligble";
}

echo "</br>";
$age = 2;
if ($age<=25 AND $age>=15){
echo "you are eligble";
}
else{
    echo "you are not eligble";
}
?>