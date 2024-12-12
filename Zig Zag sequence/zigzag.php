<?php
//It should retrieve an array from stdin and organize it in a zig zag array
$_fp = fopen("php://stdin", "r");
$input = fgets($_fp);
$input2 = fgets($_fp);
$input3 = fgets($_fp);
$arr = explode(" ", trim($input3));

function findZigZagSequence ($arr){
    sort($arr);
    $n = count($arr);
    $k = intval(($n+1)/2);
    $max = array_search(max($arr),$arr);
    $temp = $arr[$k-1];
    $arr[$k-1] = $arr[$max];
    $arr[$max] = $temp;
    

while ($k < $n-2){
    $temp = $arr[$k];
    $arr[$k] = $arr[$k+1];
    $arr[$k+1] = $temp;
    
    $k++;
}
    
echo implode(" ", $arr);

}

findZigZagSequence($arr);