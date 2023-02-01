<?php
$me = [1, 2, 3, 4];
print_r($me);
sort($me);
print_r($me);
rsort($me);
print_r($me);

#asort() arsort() assosiative array
$names = ["Prvi" => "Aleksandar", "Drugi" => "Pavle", "Treci" => "Mia"];
print_r($me);
asort($names);
print_r($me);
arsort($names);
print_r($me);

//ksort() i krsort() poredja keyyeve
$names = ["1" => "Aleksandar", "2" => "Pavle", "3" => "Mia"];
print_r($me);
ksort($names);
print_r($me);
krsort($names);
print_r($me);
