<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 1: Define and Display Constants</h1>
<?php
define('MERCURY' , "Planet" );
echo MERCURY . "<br>";
?>
    <h2>String Constant:</h2>
<?php
define('BIOS' , "Celija je osnovna gradivna jedinica svih zivih bica");
print BIOS . "<br>";
?>
    <h2>Integer Constant:</h2>
<?php
    define('MESEC' , "150000");
    $uda = MESEC;
    echo "Udaljenost meseca od zemlje iznosi $uda km <br>";
?>
    <h2>Print Constant from Function:</h2>
<?php
    function kosnica(){
        define("PCELA", "6 krila");
    }
    echo "Koliko pcela ima krila?<br>";
    kosnica();
    echo PCELA;
?>
    <h2>Display Magic Constant:</h2>
<?php
echo "we are on a line" . __LINE__;
print __FILE__;
print __DIR__;
?>
</body>
</html>