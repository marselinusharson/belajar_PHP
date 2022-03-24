<?php
/* global
 berada di luar function dan bisa diakses di luar function
*/

// $name = "marselinus";
// function sayHello(){
//     echo "Hello $name". PHP_EOL;
// }
// sayHello();

/*
global keyword
digunakan untuk mengakses global scoope dari lokal scoope
*/
// $name = "marselinus";
// function sayHello(){
//     global $name;//global keyword
//     echo "Hello $name". PHP_EOL;
// }
// sayHello();
/* global variable
bisa diakses dari scoope mana pun
*/

// $name = "marselinus";
// function sayHello(){
//     global $name;//global keyword
//     echo "Hello $name". PHP_EOL;
//     // var_dump($GLOBALS);
//     echo $GLOBALS["name"].PHP_EOL;
// }
// sayHello();
/*local
Variable dibuat di dalam function
Hanya dapat diakse dari dalam function tempat variable tersebut di buat
*/
// function createName(){
//     $nama = "marselinus";
// }
// createName();
// echo $nama;

/* static scoope
hanya bisa diset di lokal variable

*/
function increment(){
   static $counter = 1;
    echo "Counter = $counter". PHP_EOL;
    $counter ++;
}

increment();
increment();
increment();
increment();