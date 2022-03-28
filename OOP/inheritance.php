<?php

require_once "./data/manager.php";

$manager = new Manager();
$manager->name = "Marsel";
$manager->sayHello("Dinda");
$vicePrecident = new Manager();
$vicePrecident->name = "Dinda";
$vicePrecident->sayHello("Marsel");
