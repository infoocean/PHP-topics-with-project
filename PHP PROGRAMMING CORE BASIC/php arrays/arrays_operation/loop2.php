<?php 

$cars=array("maruti suzaki","xuv","honda", "hyundai","bmw","audi","wolksvesion","mercedeze","dugati",
"jaqwar","chevrolet","ferari","landrover","jeep","lemborgini","toyata","volvo");

//count length
$array_length=count($cars);
echo"the array length is:$array_length </br>";
echo "<pre>";
print_r($cars);

$i=0;
for($i=0; $i<=$array_length;$i++){
    echo"</br>";
    echo "$cars[$i]";
}

$cars[20]='tata nexa';
$cars[23]='nisaan';
echo"</br>";
$array_length=count($cars);
echo"again array length is:$array_length </br>";
echo "<pre>";
print_r($cars);
$i=0;
for($i=0; $i<=$array_length;$i++){
    echo"</br>";
    echo "$cars[$i]";
}

?>