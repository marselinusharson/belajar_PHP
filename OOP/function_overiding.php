<?php
require_once "./data/manager.php";

$manager = new Manager();
$manager -> name ="Marsel";
$manager ->sayHello("Dinda");

$vicePrecident = new VicePrecident();
$vicePrecident-> name = "dinda";
$vicePrecident ->sayHello("Marsel");