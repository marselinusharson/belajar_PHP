<?php

require_once "./data/Helper.php";
require_once "./data/conflict.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new conflict();
$conflict2 = new Data\Two\Conflict();
helpMe();
echo APPLICATION.PHP_EOL;