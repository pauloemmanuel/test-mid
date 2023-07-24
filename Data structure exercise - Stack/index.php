<?php 

require_once './Slack.php';

$stack = new Stack();

$stack->push(61);
$stack->push(84);

$element1 = $stack->pop(); 

$stack->push(78);

$element2 = $stack->pop(); 
$element3 = $stack->pop(); 

$stack->push(83);

$isEmpty = $stack->isEmpty();

echo "Element 1: " . $element1 . PHP_EOL;
echo "Element 2: " . $element2 . PHP_EOL;
echo "Element 3: " . $element3 . PHP_EOL;
echo "Is stack empty? " . ($isEmpty ? "Yes" : "No") . PHP_EOL;
