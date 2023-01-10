<?php
$istorija = 68;
$sociologija = 56;
$biologija = 45;
#print "\tZbir bodova je $istorija + $sociologija + $biologija,\n\t\tIstorija = $istorija\n\t\tSociologija = $sociologija\n\t\tBiologija = $biologija" . PHP_EOL;
//This is right way!
echo "\tZbir bodova je ". ($istorija + $sociologija + $biologija) ."\n\t\tIstorija = $istorija\n\t\tSociologija = $sociologija\n\t\tBiologija = $biologija" . PHP_EOL;
?>