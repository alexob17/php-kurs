<?php

$a = [
    "planets " =>
     [
        "sun" => [ "temp" => "hot", "color" => "red" ],
        "moon" => [ "temp " => "cold", "color"  => "white" ],
        "earth" => [ "temp " => "normal", "color" => "blue" ]
     ]
     ];

 foreach($a as $key => $val1){
    foreach($val1 as $val2 => $val3){
        foreach($val3 as $val4){
            echo $val4 . PHP_EOL;
        }
    }
 }
 