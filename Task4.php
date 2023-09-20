<?php
function printFibonacciSeries($n) {
    $num1 = 0;
    $num2 = 1;

    for ($i = 1; $i <= $n; $i++) {
        echo $num1 . " ";

        $nextNum = $num1 + $num2;
        $num1 = $num2;
        $num2 = $nextNum;
    }
}

printFibonacciSeries(15);
?>