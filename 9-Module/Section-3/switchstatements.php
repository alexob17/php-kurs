<?php
    $click = "Home";
    switch ($click){
        case "Home":
            echo "You've selected HOME\n";
            break;
        case "About":
            echo "You've selected About\n";
            break;
        default:
        break;
    }

$num = 11;

switch ($num){
    case $num == 10:
        echo "It is equal to 10\n";
        break;
    case $num == 10:
        echo 'It is equal to ten' . PHP_EOL;
        break;
    default:
        echo "it isn't equal to 10" . PHP_EOL;
        break;
}