<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
    <?php 
        $a = 10;
        $b = 12;
        $total = $a + $b;
        echo $total . PHP_EOL;
    ?>
    <h2>Find Student passed or failed using Conditional Operatos:</h2>
    <?php
        $test1 = true;
        echo ($test1) ? "Passed<br>" : "Failed<br>";;
    ?>
    <h2>Show a number is even or odd using Comparison Operators:</h2>
    <?php
        $alpha = 19;
        $beta = 20;
        $delta = 15;
        $alpha %= 2;
        $beta %= 2;
        $delta %= 2;
        echo ($delta == 0 ) ? "Delta Even<br>" : "Delta Odd<br>";
        echo ($beta == 0 ) ? "Beta Even<br>" : "Beta Odd<br>";
        echo ($alpha == 0 ) ? "Alpha Even<br>" : "Alhpa Odd<br>";
    ?>
    <h2>Check if user has access and login rights using Logical Operators:</h2>
    <?php
        $permission = true;
        $logedin = false;
        echo $permission && $logedin . PHP_EOL
    ?>
    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
    <?php
        $value = 13;
        echo $value . PHP_EOL;
        $value += 10;
        echo $value . PHP_EOL;
    ?>
</body>
</html>