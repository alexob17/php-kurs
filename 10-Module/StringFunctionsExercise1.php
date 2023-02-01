<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
<?php
    $text = 
    "       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi 
    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, 
    sunt in culpa qui officia deserunt mollit anim id est laborum           ";
    echo stripos($text, "Lorem") . PHP_EOL;
?>
<h2>Calculate the Length of the String</h2>
<?php
    echo strlen($text) . PHP_EOL;
?>
<h2>Remove White Spaces from left in the String</h2>
<?php
    echo ltrim($text) . PHP_EOL;
?>
<h2>Reverse the String</h2>
<?php
    echo strrev($text) . PHP_EOL;
?>

</body>
</html>
