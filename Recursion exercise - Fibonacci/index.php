<?php



$n = 4; 
$result = fibonacci($n);
echo "The {$n}th number in the Fibonacci sequence is: {$result}";
function fibonacci($n)
{
    if ($n == 1 || $n == 0) { 
        return 0;
    } elseif ($n == 2) { 
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}


