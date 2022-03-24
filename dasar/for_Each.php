<?php
$names = ["Randi", "Romo", "Putry", "Aron"];

// akses array menggunakan for loop:
    for($i = 0;$i <count($names);$i++){
        echo "Helo $names[$i]".PHP_EOL;
    }
    // akses array menggunakan forEach loop:
    foreach($names as $name){
            echo "HI! $name".PHP_EOL;
    }

$person =[
   "firstName" => "Faustinus",
   "middleName" => "Rinaldin",
   "lastName" => "Loke" 
];

foreach($person as $key => $value){
    echo "Data: $key : $value".PHP_EOL;
}