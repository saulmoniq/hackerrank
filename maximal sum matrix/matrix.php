<?php

//for a given matrix, calculate the maximal sum possible in the upper left cuadrant.
function findthematrix($arr) {
$n = count($arr);
$half = $n /2;
$totalsum = 0;


for($i = 0; $i < $half; $i++){

    for($j = 0; $j < $half; $j++){

        $max = max(
            $arr[$i][$j],
            $arr[$n - 1 - $i][$j],
            $arr[$i][$n - 1 - $j],
            $arr[$n - 1 - $i][$n - 1 - $j],
        );

        $totalsum += $max;

    }

}

echo $totalsum;

}


$arr = [
[112, 42, 83, 119],
[56, 125, 56, 49],
[15, 78, 101, 43],
[62, 98, 114, 108]];

findthematrix($arr);