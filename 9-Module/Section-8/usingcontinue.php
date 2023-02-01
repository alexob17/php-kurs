<?php
$i = -1;
while(true){
    $step = ($i ** 2);
    $i++;
    if ($i == 11) break;
    if (!($step % 2 == 0)) continue;
    echo $step . PHP_EOL;

}