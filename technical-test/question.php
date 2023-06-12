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

// b. Write a function that combines two lists by alternatingly taking elements, 
// e.g. [a,b,c], [1,2,3] → [a,1,b,2,c,3].
function combinesArray($arr1, $arr2)
{
    $result = array();

    for ($i = 0; $i < count($arr1); $i++) {
        array_push($result, $arr1[$i]);
        array_push($result, $arr2[$i]);
    }

    return $result;
}


// c. Write a function to compare is it same value between this string
// “I like to drink water” and “I Like Too Drink Water”
// If it's the same value, return true. If not, return false
function compareString($str1, $str2)
{
    if (strtolower($str1) == strtolower($str2)) {
        return true;
    } else {
        return false;
    }
}

