<?php

require_once "./data/Product.php";

// use Data\Product;
$product = new Product("Apple", 20000);
//echo $product->name.PHP_EOL;//error akses privat property
echo $product->getName().PHP_EOL;
echo $product->getPrice().PHP_EOL;

$dummy = new ProductDummy("Dummy", 2000);
$dummy -> info();