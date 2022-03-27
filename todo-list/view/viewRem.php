<?php
require_once __DIR__."/../Utils/input.php";
require_once __DIR__."/../BusinessLogic/removeTodoList.php";
function viewRemoveTodoList(){
 echo "Menghapus Todo".PHP_EOL;
    $pilihan = input("select nomor todo (press [x] jika ingin batal menghapus) ");
    if($pilihan == "x"){
        echo "Penghapusan dibatalkan".PHP_EOL;
    }else{
        $success = removeTodoList($pilihan);
        if($success){
            echo "Todolist ke-$pilihan berhasil dihapus".PHP_EOL;
        }else{
            "ERROR!! nomor Todo tidak sesuai".PHP_EOL;
        }
    }
}