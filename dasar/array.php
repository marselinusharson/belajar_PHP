<?php
//array pada php dinamis
//index pada php dimulai dari 0
$values = array(1,2,3,4,5);
var_dump($values);
$name = ["Marsel", "Gio", "Syahrul"];
var_dump($name);
//mengakses data dalam array
var_dump($name[0]);
//mengubah nilai dalam array
$name[0] ="Deki";
var_dump($name[0]);
//menambah data dlam array
$name[]= "Wira";
var_dump($name);
//menghapus data dalam array(index ikut hilang)
unset ($name[2]);
var_dump($name);
//mengabil total data di array
var_dump(count($name));

//membuat map 
$data = array(
    "NIM" => 2115091030,
    "Name" => "Marselinus Harson Rewo",
    "Semester"=> 2
);
var_dump($data);
var_dump($data["Name"]);
//array di dalam array
$database = [
    "NIM" => 2115091030,
    "Name" => "Marselinus Harson Rewo",
    "age"=> 20,
    "address"=>[
        "city"=>"Bajawa",
        "Distric"=>"Ngada"
    ]
];
//mengakses nested array
var_dump($database["address"]["city"]);
var_dump($database["address"]["Distric"]);
?>