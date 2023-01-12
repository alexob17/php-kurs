<?php
$day = TRUE;
$night = false;
echo ($day) ? "It is a day\n" : "It is a night\n";
var_dump($day);
echo gettype($night) . PHP_EOL;

//Echoing a boolean type
echo "True?...\n$day\n";
echo "Or false...\n\n$night\n";

//String as logical condition
$day = "d";
$night = true;
echo ($day && $night) ? "Grammar spelling\n" : "No grammar\n";

$day = null;
$night = true;
echo ($day && $night) ? "Grammar spelling\n" : "No grammar\n";

//Integer numbers
$num = 0;
echo ($num) ? "It has number\n" : "It doesn't have number\n";
echo PHP_EOL;

//Operators
$name = "John";
echo ($name === "John") ? "Wick?\n" : "So you are not Wick...\n"; 