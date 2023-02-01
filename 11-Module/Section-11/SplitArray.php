<?php
$rec = "Nice, beatiful, car in, this sunnyday";
echo implode(" ", $rec);

$rec1 = explode(",", $rec);
var_dump($rec1);