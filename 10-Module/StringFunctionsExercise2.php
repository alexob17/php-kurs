<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 2: String Functions</h1>

<h2>Word Wrap the Long String</h2>
    <?php
        $pisanije = 
        "But I must explain to you how all this mistaken idea of reprobating pleasure 
        and extolling pain arose. To do so, 
        I will give you a complete account of the system, and expound the actual 
        teachings of the great explorer of the truth, the master-builder of human happiness. 
        No one rejects, dislikes or avoids pleasure itself, 
        because it is pleasure, but because those who do not know how to pursue pleasure 
        rationally encounter consequences that are extremely painful. 
        Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
         because it is pain, but occasionally circumstances occur 
        in which toil and pain can procure him some great pleasure.";
        echo wordwrap($pisanije, 15) . PHP_EOL;
    ?>
<h2>Find and Replace the word in upper case</h2>
    <?php
        echo str_replace("pain", strtoupper("pain") , $pisanije) . PHP_EOL;
    ?>
<h2>Count number of words</h2>
<?php
    echo str_word_count($pisanije) . PHP_EOL;
?>
<h2>Shuffle the Strings</h2>
<?php
    echo str_shuffle($pisanije) . PHP_EOL;
?>

</body>
</html>
