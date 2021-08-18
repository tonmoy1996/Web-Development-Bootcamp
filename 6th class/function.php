<?php
//function

// simple function
// function  greetings()
// {
//     echo "Hi";
// }

//parametarized function

// function hello($name)
// {
//     echo "hello " . $name;
// }

// hello("tonmoy");

//simple add function

// function add($a, $b)
// {
//     return $a + $b;
// }

// echo add(2, 3);
// echo add(22, 23);

//create a function sum all numbers

// function add(...$numbers)
// {
//     $sum = 0;
//     foreach ($numbers as $num) {
//         $sum += $num; //$sum= $sum+$num
//     }
//     return $sum;
// }

// echo add(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// arrray_reduce

// function sum($a, $b)
// {
//     return $a + $b;
// }

// function add(...$numbers)
// {
//     return arrray_reduce($numbers, "sum");
// }

// echo add(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// recursion 

#10 1 print using recursion

function printNumber($num)
{
    if ($num == 0) {
        return "";
    }
    echo $num . "<br>";
    printNumber($num - 1);
}

printNumber(50);