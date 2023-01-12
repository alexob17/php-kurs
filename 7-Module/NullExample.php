<?php
$name = null;
echo ($name) ? "You have enetered name\n" : "You did'n eneter name\n";

//Checking if variable is null
$var = "0";
echo ($var) ? "Has value\n" : "No value\n";
echo ( !is_null($var)) ? "Has\n" : "No value in \$var\n";

//Unseting values from variable
$name = "Jovan";
echo $name . PHP_EOL;
unset($name);
echo $name . PHP_EOL; 