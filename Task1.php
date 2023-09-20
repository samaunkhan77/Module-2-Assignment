<?php

//Using a for loop

function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

echo "Using for loop: ";
printEvenNumbersFor(1, 20, 2);
echo "\n";


//Using a while loop



function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

echo "Using while loop: ";
printEvenNumbersWhile(1, 20, 2);
echo "\n";



//Using a do-while loop


function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

echo "Using do-while loop: ";
printEvenNumbersDoWhile(1, 20, 2);
echo "\n";




