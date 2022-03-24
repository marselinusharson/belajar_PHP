<?php
$name = "marselinus";
// reference
$otherName = &$name;
echo $otherName.PHP_EOL;
echo $name.PHP_EOL;

$otherName ="Randi";
echo $name.PHP_EOL;
echo $otherName.PHP_EOL;

function increment(&$value){
    $value++;
}

$counter =1;
increment($counter);
echo "Counter = $counter".PHP_EOL;


function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
echo "Value: $a".PHP_EOL;
$a = 200;

$b = &getValue();
echo "Value: $b".PHP_EOL;