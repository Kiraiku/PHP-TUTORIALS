<?php

$data = 'The quick brown fox jumped over the lazy dog.';

echo $data;
echo "<hr>";

// functions;
// convert a string to uppercase.
echo strtoupper($data); 
echo '<br>';
echo $data;
echo '<br>';
// Length of the string.
echo strlen($data);
echo '<br>';
// Number of words in a string.
echo str_word_count($data);
echo '<br>';
echo str_replace("dog", "cheetah", $data);

echo '<br>';

$number = 100;
echo '<br>';
echo sqrt($number);
echo '<br>';
echo pow(100, 3);
echo '<br>';
echo max(100, 143, 35, 78, 67, 15 );
echo '<br>';
var_dump('Kenya');
echo '<br>';
echo strpos($data, 'quick');
echo '<br>';
echo pi();