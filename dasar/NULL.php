<?php
$name = "marsel";
$name = NULL;

echo "name: ";
echo $name;
echo "\nis name null = ";
echo var_dump(is_null($name));

//menghapus variabel
$contoh = "marsel ganteng";
unset($contoh);
echo $contoh;
$contoh = "Marsel Bele";
$contoh = null;

var_dump(isset($contoh));


?>