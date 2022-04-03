<?php

require_once "./data/Helper.php";
require_once "./data/conflict.php";

use Data\One\Conflict as conflict1;
use Data\Two\Conflict as conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as app;

$conflict1 = new conflict1();
$conflict2 = new conflict2();
help();
echo app.PHP_EOL;