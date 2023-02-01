<?php
$a = []; //Empty array
echo count($a) . PHP_EOL;
var_dump($a);
print_r($a);

if(empty($a)){
    echo "Array is empty";
}
$a = [
    2,
    3,
    5
];

if(!empty($a)){
    echo PHP_EOL . "Array is not empty" . PHP_EOL;
}

//Array variable can be converted to other data types e.g.
$a = 10;
var_dump($a);

//And you can convert back like this
$a = [10];

//Storing array in array
$a [0] = [10];

print_r($a);

//resetting array
$a = [];
if(empty($a)){
    echo "Array is empty";
}
