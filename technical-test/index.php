<?php
include 'question.php';

// 1. 
$array1 = array('a', 'b', 'c');
$array2 = array(1, 2, 3);
$hasils = mergeArray($array1, $array2);

echo "mergeArray: ";
echo "[";
foreach ($hasils as $hasil) {
  echo $hasil . ", ";
}
echo "]";

// 2. 
echo "<br>";
echo "Combine Array: ";
echo "[";
$hasils = combinesArray($array1, $array2);
foreach ($hasils as $hasil) {
  echo $hasil . ", ";
}
echo "]";

// 3.
echo "<br>";
$str1 = "I like to drink water";
$str2 = "I Like Too Drink Water";
$hasil = compareString($str1, $str2);
echo "Compare String: ";

if ($hasil) {
  echo "true";
} else {
  echo "false";
}

// 4.
echo "<br>";
$str1 = "One of the recommended food from japan is Sushi";
$str2 = "Indonesian doesn’t eat Sushi";

echo "Take out string: ";
$hasil = takeOut($str1, $str2);
echo $hasil;

$string1 = "whast, world!";
$string2 = "hello, World!";
