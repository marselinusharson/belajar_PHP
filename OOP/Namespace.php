<?php

require_once "./data/conflict.php";
require_once "./data/Helper.php";
$conflict1 = new \Data\One\Confict();
$conflict2 = new \Data\Two\Confict();

var_dump($conflict1);
var_dump($conflict2);

Helper\helpMe();
echo Helper\APPLICATION.PHP_EOL;