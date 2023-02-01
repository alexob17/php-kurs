<?php
for($s = 10; $s <= 100; $s++){
    if ($s == 50){
        goto loop1;
        break;
    }
}

loop1 : 
 echo "Schubert is one of best composer\n";

$name = "Ivan";
if ($name == "Ivan"){
    goto loop1;
    goto loop2;
}

$cook = 123;
$sg = null;
goto loop2;
loop2 : 
    while($cook <= 125){
        $sg .= ".";
        echo "Hello\n" . $sg . PHP_EOL;
        goto loop2;
    }