<?php

//array introduction 

//array create 

$country = ["BD", "US", "IND"];

$fruit = array("apple", "malta");

//array print 
// echo "<pre>";
// var_dump($country);
// echo "</pre>";

// get element by index 

// echo $country[1];
// echo $number[4];

//set element into array

// $country[] = "AUS";


// echo "<pre>";
// var_dump($country);
// echo "</pre>";

// array lenth 

// echo count($country);

// array method

// array_push($country, "AUS");

// echo "<pre>";
// var_dump($country);
// echo "</pre>";

// array_pop($country);

// set element at the beginning of array
// array_unshift($country, "AUS");
// remove element at the beginning of array
// array_shift($country);

// echo "<pre>";
// var_dump($country);
// echo "</pre>";

$colors = "blue red green yellow";

//split any string into array

// echo getType($colors);

// $colors_array = explode(" ", $colors);

// echo "<pre>";
// var_dump($colors_array);
// echo "</pre>";
// //combine into string 
// echo implode(" ", $colors_array);

// check element into array 


// echo in_array(20, $number);

// echo array_search(100, $number);

//arrray sort 

// sort($number); //ascending order
// rsort($number); // descending order

$number1 = [1, 2, 3, 4];
$number2 = [5, 6, 7, 8, 9, 10];

// array merge 

// $number = array_merge($number1, $number2);
// $number = [...$number1, ...$number2];

// echo "<pre>";
// var_dump($number);
// echo "</pre>";

// associate array

$country = ["BD" => "Bangladesh", "US" => "USA", "AUS" => "Australia"];

//print associate array
// echo $country["US"];

// add new element into associate array 

// $country["IND"] = "INDIA";

// echo "<pre>";
// var_dump($country);
// echo "</pre>";

$keys = array_keys($country); //return keys of array

$values = array_values($country);

// sort associate array

// $sorted_array = ksort($country); // sort by keys 
asort($country); // sort by value

echo "<pre>";
var_dump($country);
echo "</pre>";


// multi-dimensional 