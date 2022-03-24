<?php
// function yang memeanggil dirinya sendiri
// Digunakan dalam kasus faktorial


// menggunakan looping
function factorialLoop(int $value): int
{
    $total = 1;
    for($i=1;$i<= $value;$i++){
        $total *= $i;
}
return $total;
}

var_dump(factorialLoop(5));
var_dump(1*2*3*4*5);

// mengguanakan rekursif function
function faktorialRecursive(int $nilai): int
{
    if($nilai == 1){
        return 1;
    }else{
        return $nilai*faktorialRecursive($nilai -1);
    }
}
var_dump(faktorialRecursive(5));
function loop(int $angka){
    if($angka == 0){
        echo "End loop".PHP_EOL;
    }else{
        echo "loop-$angka".PHP_EOL;
        loop($angka-1);
    }
}

loop(10);