<?php
require_once "./data/constructorOveriding.php";

$manager = new Manager();
$manager -> name ="Marsel";
$manager ->sayHello("Dinda");

$vicePrecident = new VicePrecident();
$vicePrecident-> name = "dinda";
$vicePrecident ->sayHello("Marsel");