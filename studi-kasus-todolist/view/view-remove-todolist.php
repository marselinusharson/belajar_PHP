<?php
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../business-logic/remove_todolist.php";
function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO".PHP_EOL;
    $pilihan = input("Nomor ([x] untuk batal)");
    if($pilihan == "x"){
        echo "Batal menghapus todo".PHP_EOL;
    }else{
        $success =removeTodoList($pilihan);
            if($success){
                echo "Sukses menghapus todo nomor $pilihan".PHP_EOL;
        }else{
            echo "Gagal menghapus todo nomor $pilihan".PHP_EOL;
        }
    }
}