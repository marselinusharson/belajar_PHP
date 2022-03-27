<?php
require_once __DIR__."/../Model/Todolist.php";
require_once __DIR__."/../Utils/input.php";
require_once __DIR__."/../BusinessLogic/showTodoList.php";
require_once __DIR__."/../view/viewAdd.php";
require_once __DIR__."/../BusinessLogic/addTodoList.php";
require_once __DIR__."/../BusinessLogic/removeTodoList.php";


function viewShowTodoList(){
    while (true){
        showTodoList();
        echo "MENU".PHP_EOL;
        echo "[1] Menambah todo".PHP_EOL;
        echo "[2] Menghapus todo".PHP_EOL;
        echo "[x] keluar".PHP_EOL;
        $pilihan = input("Pilih");
        if($pilihan == "1"){
            viewAddTodoList();
        }else if($pilihan == "2"){
            viewRemoveTodoList();
        }else if($pilihan == "x"){
            break;
        }else{
            echo "ERROR!! Input tidak sesuai".PHP_EOL;
        }
    }
    echo "Sampai Jumpa".PHP_EOL;
}