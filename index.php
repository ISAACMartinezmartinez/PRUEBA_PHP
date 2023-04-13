<?php

for($n = 0; $n <= 100; $n++){
    $x = $n%5;
    $y = $n%3;

    if ($x == 0 && $y == 0){
        echo "FizzBuzz";
        echo "-";
    } elseif ($x == 0 && $y > 0){
        echo "Buzz";
        echo "-";
    } elseif ($y == 0 && $x > 0){
        echo "Fizz";
        echo "-";
    }else{
        echo ($n);
        echo "-";
    }
}

?>