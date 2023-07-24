<?php 

$baseString = readline('Enter the string to verify that it is a palindrome: ');

if (!preg_match('/^[A-Za-z\s]+$/', $baseString)) {
    $wantToContinue = takeWantToContinue();
    
    if ($wantToContinue == 'n' || $wantToContinue == 'N') {
        echo("Ok, you can try again anytime.");
        exit();
    }
}

if(checkIfIsPalindrome($baseString)) {
      echo ("$baseString is a palindrome!");
}else{
    echo ("$baseString is'nt a palindrome!");
}

function verifyIfYesOrNoOptionIsValid($wantToContinue)
{
    return ($wantToContinue == "Y" 
         || $wantToContinue == "y" 
         || $wantToContinue == "N" 
         || $wantToContinue == "n") && !empty($wantToContinue); 
}

function checkIfIsPalindrome($string)
{
    return strtoupper($string) == strtoupper(strrev($string));
}

function takeWantToContinue()
{
    $wantToContinue = readline("You don't enterned a string, want to continue anyway? (Y to yes or N to no)");

    $isValidOption = verifyIfYesOrNoOptionIsValid($wantToContinue);

    if ($isValidOption == false) {
        echo ("Invalid option, please try again.");
        exit();
    }

    return $wantToContinue;
}
