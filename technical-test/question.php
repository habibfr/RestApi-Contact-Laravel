<?php

// Please solve this problem:

// a. Write a function to merge these two lists of arrays. 
// [a,b,c], [1,2,3] → [a,b,c,1,2,3]
function mergeArray($arr1, $arr2)
{
    $result = array();

    for ($i = 0; $i < count($arr1); $i++) {
        array_push($result, $arr1[$i]);
    }

    for ($i = 0; $i < count($arr2); $i++) {
        array_push($result, $arr2[$i]);
    }

    return $result;
}
