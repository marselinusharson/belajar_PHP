<?php
$data = [1,2,3,4,5,6,7,8,9,10];
$mapFunction = fn(int $value)=> $value*10;
var_dump(array_map($mapFunction,$data));
var_dump(array_map(fn(int $value)=> $value * 2,$data));

rsort($data);
var_dump($data);

sort($data);
var_dump($data);

$person =[
    "firstName"=>"Marselinus",
    "middleName"=>"Harson",
    "lastName"=>"Rewo"
];

var_dump(array_keys($person));
var_dump(array_values($person));