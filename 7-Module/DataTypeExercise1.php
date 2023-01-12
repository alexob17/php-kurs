<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
<?php
$lenght = 10;
$breath = 5;
$lenght = $lenght * $breath;
echo "The area is $lenght<br>";
?>
<h2>Calculate Student Exact Marks Percentage with Double:</h2>
<?php
    $mark1 = 40;
    $mark2 = 30;
    $mark = 64;
    $mark = (($mark + $mark1 + $mark2) / 300 );
    echo $mark * 100 . PHP_EOL;
?>
<h2>Check if the user has admin roles:</h2>
<?php
$signed = true;
$admin = false;
echo ($signed && $admin) ? "You are admin<br>" : "You are not admin<br>";
?>
<h2>Define and Display a User Name using Strings:</h2>
<?php
    $name = "Eliot";
    $surname = "Alderson";
    echo $name . $surname . PHP_EOL;
?>
<h2>Check if the variable is null or not:</h2>
<?php
    $num = 0;
    echo (is_null($num)) ? "It is<br>" : "It isn't<br>";
?>

</body>
</html>

