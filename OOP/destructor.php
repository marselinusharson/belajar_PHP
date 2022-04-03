<?php

require_once "./data/clas.php";

$randi = new Person("Randi", "Gurusina");
$romo = new Person("Jansen", "Roga");
$randi -> name = "Rinaldin";
$randi->sayHallo("Romo");
echo "Suhu = ".Person::SUHU.PHP_EOL;
echo "program selesai".PHP_EOL;