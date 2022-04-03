<?php
require_once "./data/Helper.php";
require_once "./data/conflict.php";

use Data\One\{Conflict as conflict1, Dummy, Sample};
use function Helper\{helpMe as help};

$conflict = new conflict1();
var_dump($conflict);
help();