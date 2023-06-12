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
