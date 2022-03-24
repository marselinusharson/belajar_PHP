<?php
$name = "marselinus";
// reference
$otherName = &$name;
echo $otherName.PHP_EOL;
echo $name.PHP_EOL;
$otherName ="Randi";
echo $name.PHP_EOL;
echo $otherName.PHP_EOL;