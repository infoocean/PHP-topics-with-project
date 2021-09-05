<?php 

$head=0;
$tails=0;
for ($a=1;$a<=100;$a++){
$randnumber=rand(1,2);
    if($randnumber==1){
    $head++;
    }
    else{
        $tails++;
   }
}
echo "$head";
echo "</br>";
echo "$tails";
echo "</br>";

if ($head>$tails){
echo "head is greater";
}
else if($head<$tails){
    echo "head is less";

}
else{
    echo "both are equal";
}
?>