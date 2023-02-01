<?php
$arr = ["me" , 34 , 7.5];
//First way how to print array
var_dump($arr);
//Second
print_r($arr);

//echo @$arr; //Not printing values in array

echo $arr[0] . PHP_EOL;
echo $arr[1] . PHP_EOL;
echo $arr[2] . PHP_EOL;

$name = "Tomas Hawk";
//$arr[1] - array element
//Data types can be integer, string, float or bool

$arr = [
    $arr1 = array(1, 1, 2, 3 ),
    $name
];
echo $arr[0][2] . PHP_EOL;

//Array is collection of varibables

echo "Number of elements is " . count($arr) . PHP_EOL;

for($el = 0; $el <= 49; $el++){
    @$s .= ".|";
    $arr[$el] = $s;
    print "Array " . ($el+1);
    echo $arr[$el] . PHP_EOL;
}

//Constants with arrays
const ARRAY_ELEMENT = 10;
echo "{$arr[ARRAY_ELEMENT]}" . PHP_EOL;

//Changing elements in array is like changing variables
$arr[0] = 1;
$arr[49] = 43;
print_r($arr);
var_dump($arr);