<?php
// operator array
// 1. Union:
$first = [
    "firstName" => "Marsel"
];
$last = [
    "lastName" => "Rewo"
];

$fullName = $first + $last;
var_dump($fullName);

$a = [
    "firstName" => "Jansen",
    "lastName" => "Doso"
];

$b = [
    "lastName" => "Doso",
    "firstName" => "Jansen"
];
var_dump($a == $b);
var_dump($a === $b);

?>