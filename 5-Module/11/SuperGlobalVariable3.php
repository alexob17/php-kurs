<?php
global $name;
$name = "John Wick";
function print_name(){
    echo $GLOBALS['name'];
}
print_name();
?>