<?php
for ($num = 1; true ; $num++){
    if ($num % 2 == 0){
        echo "Even number $num\n";
    }
    else {
        echo "Odd number $num\n";
    }
    if($num == 20){
        break;
    }
}