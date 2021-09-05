<?php

$amount=10000;
$time_years=3;
$rate_per=10;
$simpleintrest=($amount*$time_years*$rate_per/100);
 echo "the amount is : $amount";
 echo "</br>";
 echo 'time in year :'.$time_years;
 echo "</br>";
 echo "rate is: $rate_per </br>";
 echo "the total amount of intrest is (EMI) in 3 years :- $simpleintrest";
 echo "</br>";
 $year1=$simpleintrest/3;
 echo "EMI in 1 year : $year1 </br>";
$month1=$year1/12;
echo " EMI 1 month = $month1 ";

?>