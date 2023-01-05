<?php

//Sample 1
global $main; 
$main = "It' ok";

function print_main(){
    $main = "It's not ok";
    echo $main;

}
print_main();
print $main;


//Sample 2
global $name;
$name = "Metallica";

function print_name(){
    echo $name;
}
print_name();
echo $name;


//Sample 3
global $rain;
$rain = "Storm";
function WEATHER(){
global $rain;
$rain = "No rain";
echo $rain;
}
WEATHER();
echo $rain;
?>

