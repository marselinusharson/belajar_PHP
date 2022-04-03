<?php

require_once "./data/Location.php";

use Data\{Location,City,Distric,Country};


// $location = new Location(); ERORR

$country = new    Country();
$country->name= 'Indonesia';
var_dump($country);
