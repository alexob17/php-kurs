<?php
//Associative arrays 
//index => value
//indexed array
$myarray = [null,"Jack", "John", "Elliot", "Alex"]; //assassigning like this you must specif
foreach($myarray as $b){
    echo $b . PHP_EOL;
}

//Associative array
$myarray = [
    "Ponedjeljak" => "Mon",
    1 => "Tue",
    2 => "Wed",
    3 => "Thu",
    4 => "Fri",
    "Subotar" => "Sat",
    6 => "Sun"
];
var_dump($myarray);

foreach($myarray as $key => $val){
    echo $key . "\t=>\t" . $val . PHP_EOL;
}

#Printing all keys
print_r(array_keys($myarray));

$userDet = [
    "John" => "john@gmail.com",
    "Michelle" => "michle@gmail.com",
    "Mike" => "mike@gmail.com",
    0 => 1
];

var_dump($userDet);
echo $userDet["John"] . PHP_EOL;
echo $userDet["Michelle"] . PHP_EOL;
echo $userDet["Mike"] . PHP_EOL;

echo @$userDet[0] . PHP_EOL;
echo @$userDet[3] . PHP_EOL;

//To add a key you must...
$userDet["Alex"] = "alex@gmail.com";
print_r ($userDet);