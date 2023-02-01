<?php

for ($t = 1;$t <= 77; $t++){
    echo $t . PHP_EOL;
    if ($t==50) break;
}



$two = 1;
$three = 1;
for ($one = 1; $one <= 10; $one++){
    while($two <= 10){
        do{
            echo $three . PHP_EOL;
            if ($three == 5) break;
            $three++;
        }while($three <= 10);
        echo $two . PHP_EOL;
        if ($two == 7) break;
        $two++;
    }
    echo $one . PHP_EOL;
    if ($one == 9) break;
}



$two = 1;
$three = 1;
for ($one = 1; $one <= 10; $one++){
    while($two <= 10){
        do{
            echo $three . PHP_EOL;
            if ($three == 5) break 3;
            $three++;
        }while($three <= 10);
        echo $two . PHP_EOL;
        $two++;
    }
    echo $one . PHP_EOL;
}