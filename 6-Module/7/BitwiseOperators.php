<?php

/*
These are bitwise operators
* & - AND 
* | - OR
* ^ - XOR
* ~ - NOT
* ----------
* &
* 1 - 1 = 1
* 1 - 0 = 0
* 0 - 1 = 0
* 0 - 0 = 0
*/


#Usement of &
$bmw = 2; // 0010
$audi = 0; // 0000
echo $bmw . $audi . "\n";
echo $bmw & $audi . PHP_EOL;

$bmw = 3; // 0011
$audi = $bmw;
echo $bmw & $audi . "\n";


#Usement of | 1 - 1 = 0 & 1 - 0 = 1
$bmw = 1; // 0001
$audi = 0; // 0000
echo $bmw | $audi . PHP_EOL;


#Usement of ^ 1 is 0 and if is 1 - 1 the 0
$bmw = 2; // 0010
$audi = 3; // 0011
echo $bmw ^ $audi . "\n";


#Usement of ~  If 1001 the 0110 (It's backflip)
echo ~$bmw . PHP_EOL; //1101 - 13
echo ~$audi . "\n"; // 1100 - 12
