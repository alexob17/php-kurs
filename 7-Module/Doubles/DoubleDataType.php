<?php
$float = 45.89;
echo $float . PHP_EOL;
var_dump($float);
echo gettype($float) . PHP_EOL;

//Negative numbers
$blue = -4.5;
echo $blue . PHP_EOL;

//Round float numbers
$price = 0.99;
echo round($price) . PHP_EOL;

//Comparing two numbers with precision
$blue = 0.89;
echo (abs ($blue - $price) < 0.09) ? "Yes" : "No";