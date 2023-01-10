<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
    <?php
        $varijabla = 10;
        echo --$varijabla . PHP_EOL;
    ?>
    <h2>Show the negative of 5 using Bitwise Operator:</h2>
    <?php
        $number = 1; //0001
        echo ~$number . PHP_EOL;
    ?>
    <h2>Execute a dos or linux command using Execution Operator:</h2>
    <?php
        echo `mkdir Skakavac`;
        echo `cd :C`;
    //Linux
        echo `ping https://www.youtube.com/watch?v=YVfqdYOQ00c`
    ?>
    <h2>Raise and Error and control it using Execution Operators:</h2>
    <?php 
        @$myError = 0/0;
        echo "Sorry 404 Country\n"
        
    ?>
    <h2>Show an example of Operator Precedence Operator:</h2>
    <?php
        $first = true;
        $second = false;
        echo $first && $second . PHP_EOL;
        echo $first AND $second . PHP_EOL;
    ?>

</body>
</html>

