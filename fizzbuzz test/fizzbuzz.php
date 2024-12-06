<?php

// Given a number n, for each integer i in the range from 1 to n inclusive, print one value per line as follows:
//     if i is a multiple of both 3 and 5, print FizzBuzz;
//     if i is a multiple of 3 (but not 5), print Fizz;
//     if i is a multiple of 5 (but not 3), print Buzz;
//     if i is not a multiple of 3 or 5, print the value of i.


/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    // Write your code here
    $i = 1;
    while ($i <= $n){
    $fizzbuzz = 1;
    $fizz = $i%3; 
    $buzz = $i%5; 
    if($fizz === $buzz){
        $fizzbuzz = $fizz;
    } 
    if( $fizzbuzz == 0){
                echo "FizzBuzz" . "\n";
    } else if ($fizz == 0){
        echo "Fizz" . "\n";
    } else if ($buzz == 0){
        echo "Buzz" . "\n";
    } else {
        echo $i . "\n";
    }
    
    $i++;
}    

return false;
}
$n = intval(trim(fgets(STDIN)));

fizzBuzz($n);


