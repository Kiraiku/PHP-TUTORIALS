<?php
// arrays store multiple items
// Indexed array.
$ages = [90,45,32,43,77,89,90,43,51,45,34,56,88,12,22,76,67,48,34,17,19];
$names = ["John", "Mary", "Musa", "Moha", "Mike", "Jerry", "Klein","Kim", "Joel", "Ahmed", "Noor"];

// Operations on an array;
// fetch, #items in array, sort array, max, min., reverse, print all items.
// position == index 0
echo $ages [14];
echo "<br>";
print $names[1]; 
echo "<br>";
// # of items in the array.
echo count($ages);
echo "<br>";
echo count($names);
echo "<br>";
echo max($ages);
echo "<br>";
echo array_sum($ages);
echo "<br>";
// Calculating the average.
$avg = array_sum($ages) / count($ages);
$avg = round($avg, 2);
echo "The average is $avg";
echo "<br>";
// var_dump($ages);
echo "<br>";
$reversed = array_reverse($ages);
var_dump($reversed);
sort($ages);
sort($names);
echo "<br>";

echo "<pre>";
  var_dump($ages);
  var_dump($names);
echo "</pre>";

// loop foreach
foreach ($ages as $x) {
    echo "<p> $x </p>";
}

foreach ($names as $name) {
    print "<h4> $name </h4>";
}

// Associative == key value pairs.
$data = ["name" => "Hellen", "age" =>22, "gender" => "Female", "course" => "Bsc Arts"];

echo "<hr>";
// key
print $data["gender"];
echo "<br>";
// key
print $data["course"];
echo "<hr>";

$people = [ ["name" => "Jane", "age" => 25], ["name" => "Musa", "age" =>18], ["name" => "Kevin", "age" => 37] ];

foreach ($people as $person) {
  
  echo "<h4>";
  echo $person ["name"];
  echo "</h4>";
  // Alternative
  // echo "<p>" . $person["name"] . "</p>";

  //or
  $miaka = $person["age"];
  echo "<p> The age is   $miaka </p>";
  
  echo $person ["age"];
  echo "<hr>";
}