<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Print Student Details</h1>

<h2>Student Information:</h2>
<?php
    $name = "Peter Smith";
    $age = "23";
    $contact = "+1 378 4950 - 432";
    $adress = "Manhattan NY USA";
    $class = "C7";
    echo $name . PHP_EOL . $age . PHP_EOL;
    echo $contact . PHP_EOL . $adress . PHP_EOL . $class . PHP_EOL;
?>
<h2>Exams Attended and Marks:</h2>
    <?php
        $mark = null;
        $mark1 = 50;
        $mark2 = 47;
        echo (!is_null($mark)) ? "Attended to first exam<br>" : "Didn't attended to first exam<br>"; 
        echo (!is_null($mark1)) ? "Attended to second exam<br>" : "Didn't attended to second exam<br>";
        echo (!is_null($mark1)) ? "Attended to third exam<br>" : "Didn't attended to third exam<br>";
    ?>
<h2>Final Marks:</h2>
    <?php
        $marks = ($mark + $mark1 + $mark2) / 3;
        echo "Final Mark is $marks<br>";
    ?>
<h2>Percentage:</h2>
    <?php
        $total = 300;
        $percent = ($marks / $total) * 100;
        echo "Percentage of marks are $percent<br>";
    ?>
<h2>Result:</h2>
    <?php
    echo ($percent >= 80)  ? "Passed<br>" : "Failed<br>"; 
    ?>

</body>
</html>

