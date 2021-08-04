<?php


// create a string

$name = "bijoy";

$name2 = "sonju";

//string concatanation

// echo $name . $name2;


// string function

$moto = "I love my Country";

$text = "hello world";

// echo strlen($moto); //length

// echo $text . "<br>";
// echo trim($text); //trim 

// echo ltrim($text); //left trim

// echo rtrim($text); //right trim

// echo str_word_count($moto);

$name = "Tonmoy";

// echo strrev($name); 

// echo strtoupper($name);
// echo strtolower($name);

// echo strpos($text, "o");

// $text = "hello World";

// echo str_ireplace("world", "tonmoy", $text);

//multiline print 
// $longText = "hello,
// I am tonmoy.
// How are you?";

// echo htmlentities(nl2br($longText));

$newtext = "<h2>hi</h2>";

echo htmlentities($newtext);