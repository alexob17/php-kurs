<?php 
//Difference between AND &&
$result1 = true && false ;
$result2 = true and false;

echo ($result1) ? "true": "false";
echo PHP_EOL;
echo ($result2)? "true": "false";
echo PHP_EOL;


echo (true && false) ? "true": "false";
echo PHP_EOL;
echo (true and false)? "true": "false";
echo PHP_EOL;