<?php
require_once "./data/clas.php";

$person = new Person("Dinda", "Karangasem");
var_dump($person);
$sayang = new Person("Dinda", "sayang");
var_dump($sayang);
$sayang->name = "Armin";
echo "Nama: $sayang->name". PHP_EOL;