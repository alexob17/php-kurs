<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>
    <?php 
    $auto = "Porche";
    echo $auto . "<br>";
    ?>

    <h2>String Variable:</h2>
    <?php
    $sport = "Real Madrid je dobio Barcelonu 3:0<br>";
    echo $sport;
    ?>
    <h2>Integer Variable:</h2>
    <?php
    $number2 = 3;
    $number3 = 5;
    echo $number2 = $number2 + $number3 . "<br>"; 
    ?>
    <h2>Print Variable from Function:</h2>
    <?php
    function my_function(){
        $seka = "Vuce za kosu";
        echo $seka . "<br>";
        return $seka;
    }
    echo my_function();
    ?>
    <h2>Static Variable:</h2>
    <?php function brojac(){
        static $broj;
        echo $broj . "<br>";
        $broj = $broj + 1;
        return $broj;
    }
    brojac(); brojac(); brojac(); brojac();
    
    ?>
    <h2>Global Variable:</h2>
<?php
global $rijeka;
$rijek = "Lim";
$GLOBALS['rijeka'] . "<br>";
?>
    <h2>Super Global Variable:</h2>
<?php
$kordinate = "40° 25' 54.8688'' N and 116° 34' 13.3464'' E";
function china(){
    echo "Kordinate velikog kineskog zida su --> " . $GLOBALS['kordinate'];
    echo "<br>";
}

?>  
    <h2>Variables of Variables:</h2>
    <?php
    $repa = "mis";
    $deda = "repa";
    $baba = "deda";
    $unuka = "baba";
    $pas = "unuka";
    $macka = "pas";
    $mis = "macka";
    echo $$$$mis;
    echo $$mis;
    print $$$$$$$$$macka;

    ?>

</body>
</html>
<!-- Iz nekog nepoznatog razloga ne radi mi global kao ni super pogledao
sam po forumima ali nista nisam nasao da mi moze kociti 
code --> 