<?php
function printFirst10Fibonacci() {
    $num1 = 0;
    $num2 = 1;
    $count = 0;

    while ($count < 10) {
        $fibonacci = $num1 + $num2;
        
        if ($fibonacci > 100) {
            break;
        }

        echo $fibonacci . " ";

        $num1 = $num2;
        $num2 = $fibonacci;
        $count++;
    }
}

printFirst10Fibonacci();
?>