<?php
$text = 
"The Bach family already counted several composers when Johann Sebastian was born as the last child of a city musician in Eisenach. 
After being orphaned at the age of 10, he lived for five years with his eldest brother Johann Christoph, 
after which he continued his musical education in Lüneburg. From 1703 he was back in Thuringia, 
working as a musician for Protestant churches in Arnstadt and Mühlhausen and, for longer stretches of time, 
at courts in Weimar, where he expanded his organ repertory, and Köthen, 
where he was mostly engaged with chamber music. ";
$word = "music";

echo strpos($text, $word) . PHP_EOL;
echo strpos($word, $text) . PHP_EOL;
echo true . PHP_EOL;
echo false . PHP_EOL;
echo true . PHP_EOL;
echo strpos($text, "1703") . PHP_EOL;
echo strpos($text, "The") . PHP_EOL;