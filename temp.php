<?php

$arr = [1, 3, 5, 7, 9];

sort($arr);
$n = 4;
$minSum = array_sum(array_slice($arr, 0, $n));

$maxSum = array_sum(array_slice($arr, -$n));

echo "Minimum Sum: $minSum<br>";
echo "Maximum Sum: $maxSum<br>";

//----------------------

$countArr = count($arr);
echo $countArr;

$max=0;
$min=0;
$condi = $countArr - $n;
for ($i=1; $i <= $countArr ; $i++) { 
    if($i<=$n){
        $min = $min + $arr[$i];
    }

    if($i>$condi){
        $max = $max + $arr[$i];
    }
}

echo $max;
echo $min;


