<?php

require_once "./data/Category.php";
use Data\ {Category};

$category = new Category();
$category->setName("Apple");
$category->setName("");
$category->setExpensive(true);
echo "Name : {$category->getName()}".PHP_EOL;
echo "expensive: {$category->isExpensive()}".PHP_EOL;