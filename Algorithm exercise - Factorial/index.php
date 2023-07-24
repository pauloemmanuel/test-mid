<?php

$baseNumber = readline('Enter the number to have your factorial calculated: ');

if(!is_numeric($baseNumber)) {
    echo 'You must enter a number!';
}

echo "The factorial of $baseNumber is: ".calcFactorial($baseNumber);


function calcFactorial($number)
{
    if($number == 0 || $number == 1) {
        return $number;
    }
    
    $acumullatedNumber = $number;
  
    while($number > 1){
        $acumullatedNumber = $acumullatedNumber * --$number; 
    }
    
    return $acumullatedNumber;
}
