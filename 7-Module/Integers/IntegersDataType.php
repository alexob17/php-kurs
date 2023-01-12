<?php
echo PHP_INT_SIZE . PHP_EOL;
$star = 10;
echo $star . PHP_EOL;
var_dump($star);
echo PHP_EOL;

//Hexadecimal examples
$kutija = 0x7F22;
echo $kutija . PHP_EOL;

//Type casting from string to integer 
$kutija = 10;
$star = "24";
$star = $star + $kutija;
echo $star . PHP_EOL;
var_dump($star);

//Negative numbers
$star = $star - $star - $kutija;
echo PHP_EOL . $star . PHP_EOL;