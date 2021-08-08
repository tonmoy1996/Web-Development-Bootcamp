<?php


// while For foreach do while 


//while 
//5050

// $num = 1;
// $sum = 0;
// while ($num <= 100) {
//     $sum += $num; // $sum=$sum+ $num; 
//     $num++;
// }


// echo $sum . "\n";


// even number addition

// 0+2+4+6+8+...+100


// $num = 0;
// $sum = 0;
// while ($num <= 100) {
//     // echo $num . "<br>";
//     echo "Sum:" . $sum . " Num:" . $num . "<br>";
//     $sum += $num; // $sum=$sum+ $num; 
//     $num += 2; // $num = $num+2; 
// }



// echo $sum . "\n";


//for loop
// $sum = 0;
// for ($num = 1; $num <= 100; $num++) {
//     $sum += $num;
// }

// echo $sum;


//do while

// $num = 2;
// do {
//     echo $num . "<br>";
//     $num += 2;
// } while ($num <= 100);


// foreach
$colors = ["red", "green", "blue", "sky"];

// foreach ($colors as $color) {
//     echo $color . "<br>";
// }

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8];

// foreach ($numbers as $a) {
//     echo $a . "<br>";
// }

// $country = ["BD" => "Bangladesh", "US" => "USA", "AUS" => "Australia"];

// foreach ($country as $key => $value) {

//     echo "key: " . $key . "Value: " . $value . "<br>";
// }



// break continue


// for ($num = 1; $num <= 10; $num++) {
//     echo $num . "<br>";
//     if ($num === 5) {
//         break;
//     }
// }

// continue

for ($num = 1; $num <= 10; $num++) {
    if ($num === 5 || $num === 8 || $num === 9) {
        continue;
    }
    echo $num . "<br>";
}

//function