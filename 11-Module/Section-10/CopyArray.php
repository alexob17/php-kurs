<?php
    $arr3 = [ "3" => "John", "1" => "Ajit", "2" => "Roger"];
    $arr = [0, 1, 2, 3, 4, 5];
    $arr1 = ["Belgrade", "Sofia", "Zagreb", "Athens"];
    $arr2 = [];
    //First way
    print_r($arr2);
    $arr2 = $arr1;
    var_dump($arr2);

    //Second way
    foreach($arr as $val){
        $arr2[] = $val;
    }
    var_dump($arr2);

    //Third way
    $arr2 = $arr3;
    var_dump($arr2);