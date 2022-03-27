<?php

require_once "./data/clas.php";
$marsel = new Person();
$marsel->name = "Marsel";
$marsel->sayHallo("Randi");

$randi = new Person();
$randi->name ="Randi";
$randi->sayHallo(null);