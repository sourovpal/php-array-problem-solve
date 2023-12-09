<?php

$array = [1,2,3,4,5,6,7,8,9];

$temp = [];
$n = 4;

for ($i=0; $i <count($array); $i+=$n) 
{ 
    $temp[] = array_slice($array, $i,$n);
}

print_r($temp);

?>
