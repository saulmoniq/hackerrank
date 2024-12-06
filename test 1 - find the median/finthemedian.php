<?php
// fin the median in an array of INTs

function find_the_median($arr){

//storing the median
$position = round(count($arr)/2)-1;
$n = count($arr);

//bubble sorting the array
for($i = 0; $i < $n - 1; $i++) {
    for($j = 0; $j < $n - $i - 1; $j++){
        if($arr[$j] > $arr[$j + 1 ]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }

}
// printing the median
echo $arr[$position];

}

//giving an array and calling the function.
$arr = [5,3,1,10,9,2,12,4,13];
find_the_median($arr);