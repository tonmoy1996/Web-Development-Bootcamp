<?php
// For checking prime number I need to loop through 2 to number/2 and always
//  check is number is divisible by i 
// if divisible then we can say it's not a prime number or it's a prime number 

$number = 27;
$isPrime = true;
for ($i = 2; $i <= $number / 2; $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    } else {
        $isPrime = true;
    }
}
if ($isPrime == true) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}