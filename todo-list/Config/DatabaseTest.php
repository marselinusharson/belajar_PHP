<?php
require __DIR__ . "./Database.php";
$db = \Config\Database::getConnection();

echo "Sukses terkoneksi ke database mysql";