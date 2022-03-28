<?php

require_once "./data/clas.php";
$marsel = new Person("Randi", "Bali");
$marsel->name = "Marsel";
$marsel->sayHallo("Randi");
$marsel ->info();

$randi = new Person("Marsel", "Bali");
$randi->name ="Randi";

$randi->sayHallo(null);
$randi->info();