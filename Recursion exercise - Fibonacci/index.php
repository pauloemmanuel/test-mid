<?php



$n = 5; 
$result = fibonacci($n);
echo "The {$n}th number in the Fibonacci sequence is: {$result}";
function fibonacci($n)
{
    if ($n == 0) { 
        return 0;
    } elseif ($n == 1) { 
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}


