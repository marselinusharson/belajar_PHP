<?php
//single quote string
echo 'Nama:';
echo 'Marselinus Harson Rewo';
echo "\n";


echo "Nama :";
echo "Marselinus \t Harson \t Rewo";
echo "\n";
//multiline string
echo <<<MOMO

Selamat belajar php
Ini teksnya multiline menggunakan
"heredoc". dia bisa membuat string yang punya banyak 
string dengan multiline
MOMO;

echo <<< MOMO
Ini merupakan string menggunakan
Nowdoc. Mari belajar terus tentang bahasa PHP
MOMO
?>