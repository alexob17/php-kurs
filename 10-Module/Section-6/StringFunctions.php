<?php 
/*
String functions
	- Number of Words
	- Replace Strings
	- Reverse Strings
	- Remove White Spaces
	- Shuffle Strings
 	- Find Position case insenstive.
	- Upper and Lowercase
	- Word Wrap the String and display it.
*/

$content = "Constantinople fell 1453\n";
$word = "1453";
$pos = false;

echo $content . PHP_EOL;
//Counting the number of words in string
echo str_word_count($content) . PHP_EOL;

//Replacing strings
$content = "Venice is beatiful city, it's located in norteastern Italy.\n";
echo str_replace("beatiful", "nice", $content) . PHP_EOL;

//Reverse strings
echo strrev($content) . PHP_EOL;

//Shufle strings
echo str_shuffle($content) . PHP_EOL;

//Removing whitespaces 
echo str_replace(" ","",$content). PHP_EOL;

//Position case insensitive
echo stripos($content , "VENICE") . PHP_EOL;

//Changing to lower and uppercase
echo strtoupper($content) . PHP_EOL;
echo strtolower($content) . PHP_EOL;

//Word warp
$content = 
"			In publishing and graphic design, Lorem ipsum is a placeholder text 
commonly used to demonstrate the visual form of a document or a
 typeface without relying on meaningful content. 
Lorem ipsum may be used as a placeholder before final copy is available.";
echo $content . PHP_EOL;
echo wordwrap($content , 20) . PHP_EOL;

//Trim
echo trim($content) . PHP_EOL;