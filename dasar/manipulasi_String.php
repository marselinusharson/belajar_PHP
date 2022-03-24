<?php
// dot operator
$nama = "Marselinus Harson Rewo";

echo "Nama : ".$nama.PHP_EOL;
// konversi ke number dan sebaliknya;
$valueString = (string)100;
var_dump($valueString);
$valueInteger=(int)"1000";
var_dump($valueInteger);
$valuefloat= (float)"190.45";
var_dump($valuefloat);
$valuefloat1= (float)"string";
var_dump($valuefloat1);

// mengakses karakter
$name = "Marsel";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
// echo $name[6] . PHP_EOL; uninitialized

// Variable parsing
echo "Hello $name Selamat belajar PHP".PHP_EOL;
// curly brace
echo "Hello {$name}man Selamat belajar PHP".PHP_EOL;
?>