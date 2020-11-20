<?php
// Write a PHP Program to perform various string operations.
$k="kaushik";
$s="sunil";
#length of string
echo strlen($k);
echo "<br>";
# word count
echo str_word_count($k);
echo "<br>";
# uppercase
 echo strtoupper($k);
 echo "<br>";
#repeartee
 $input = 'kaushik';
$multiplier = 5;
$separator = ',';
print implode($separator, array_fill(0, $multiplier, $input));
print "\n";
?>