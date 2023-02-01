<?php
$a[] = 10;
$a[] = 20;
var_dump($a);

$a[5] = "Alexander the Great";
print_r($a);
$a[] = 14.4;
var_dump($a);

foreach($a as $s){
    echo $s . PHP_EOL;
}

echo $a[6] . PHP_EOL;