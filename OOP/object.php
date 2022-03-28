<?php

require_once "./data/clas.php";

$object1 = new Person();
$object1->nama = "Marsel";
$object1->address = "Bali";
$object1->country ="Indonesia";
$object2 = new Person();


var_dump($object1);
var_dump($object2);

echo "Name: $object1->nama".PHP_EOL;
echo "Adress: $object1->address".PHP_EOL;
echo "Country: $object1->country".PHP_EOL;
