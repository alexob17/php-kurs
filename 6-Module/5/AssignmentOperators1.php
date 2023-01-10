<?php 
/*
= - Assignment operator used to assign values
+= - add assignment operator .=
-= - substract assignment operator
*= - Multiple assignment operator 
/= - Divide assignment operator
%= - Modulus assignment operator
*/
$a = 5;
//1.==> $a = $a + 1;
$a += 3;
echo $a . PHP_EOL;
//2.==> $a = 5 & $a += 5
$marks = 0;
$marks += $a;
echo $marks . PHP_EOL;

# .= is used for adding strings to string, e.g.

$suncev_sistem = "Suncev sistem poseduje";
echo $suncev_sistem . PHP_EOL;
$suncev_sistem .= " 8 planeta\n";
echo $suncev_sistem . PHP_EOL;


