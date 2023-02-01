<?php
for($in = 1; $in <= 10 ; $in++){
    if (($in%2) == 0){
    echo $in . PHP_EOL;
    }
}

$in = 1;
for(; $in <= 10 ; $in++){
    if (($in%2) == 0){
    echo $in . PHP_EOL;
    }
}


for(; true; ){
    if (($in%2) == 0){
    echo $in . PHP_EOL;
    }
}
