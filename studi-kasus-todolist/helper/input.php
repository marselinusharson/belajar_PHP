<?php
// digunakan untuk merekam inputan dari user
function input(string $info){
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);
}