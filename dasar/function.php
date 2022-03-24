<?php
sayHallo("Randi", "Loke");
sayHallo("jansen","Doso");
function sayHallo($namadepan, $namabelakang= null){
    echo "Hello $namadepan $namabelakang".PHP_EOL;
}
sayHallo("Putry", "Bhoki");
sayHallo("Aron");

//function return value:
function sum(int $nilai1, int $nilai2){
    return $nilai1 + $nilai2;
}
var_dump (sum(10,10));
echo sum(10,20).PHP_EOL;
echo sum(10,"20").PHP_EOL;
echo sum(false,true).PHP_EOL;
echo sum(1.2,2.3).PHP_EOL;
// echo sum([],[]).PHP_EOL;

function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total +=$value;
    }
    echo "Total: {". implode(",",$values). "} = $total".PHP_EOL;
}
sumAll(1,2,3,4,5,6,7,8,9,10);
sumAll(1,2,3,4,5);
$nilai =[5,10,15,20,25];
sumAll(...$nilai);

echo "function return Value".PHP_EOL;
function getFinalValue(int $value){
if($value>=90){
    return "A";
}else if($value >=80){
    return "B";
}
else if($value >=70){
    return "C";
}else if($value >=60){
    return "D";

}else if($value >=50){
    return "E";
}else{
    return "F";
}
}
var_dump(getFinalValue(60));
var_dump(getFinalValue(70));
var_dump(getFinalValue(80));
var_dump(getFinalValue(90));

echo "Arrow function".PHP_EOL;
$namaBelakang = "Loke";
$namaDEpan = "Randi";
$arrowFunction = fn()=> "Hello $namaDEpan $namaBelakang".PHP_EOL;

echo $arrowFunction();

echo "Callback function:".PHP_EOL;
function sayHello (string $nama, callable $filter){
    $finalName = call_user_func($filter, $nama);
    echo "Hello $finalName".PHP_EOL;
}

sayHello("Marselinus","strtoupper");
sayHello("MARSELINUS","strtolower");
sayHello("Randy", fn(string $name)=>strtoupper($name));
sayHello("Randy", function(string $nama): string {
  return strtolower($nama);
});