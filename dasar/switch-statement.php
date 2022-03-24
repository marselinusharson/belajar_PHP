<?php

function cek($lampu){

    switch($lampu){
        case "Merah":
        echo "Berhenti".PHP_EOL;
    break;
    case "Kuning":
        echo "Waspada".PHP_EOL;
    break;
    case "Hijau":
        echo "Jalan".PHP_EOL;
    break;
    default:
    echo "Error";
}
}
cek("Merah");
cek("Hijau");
cek("Kuning");

function cekOpsional($lampu){

    switch($lampu):
        case "Merah":
        echo "Berhenti".PHP_EOL;
    break;
    case "Kuning":
        echo "Waspada".PHP_EOL;
    break;
    case "Hijau":
        echo "Jalan".PHP_EOL;
    break;
    default:
    echo "Error";
    endswitch;
}
cekOpsional("Kuning");
?>