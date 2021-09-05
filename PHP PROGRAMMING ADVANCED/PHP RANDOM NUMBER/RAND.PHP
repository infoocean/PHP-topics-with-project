<?php

$generate_random_number = rand();

echo $generate_random_number;

echo "<br>";

$rand =rand(1,100);

echo $rand;

echo "<br>";

$win=rand(1,2);

if ($win==1) {
	# code...
	echo "you win Head";
	echo $win;
}else{
	echo "i win tell";
	echo "$win";
}

?>