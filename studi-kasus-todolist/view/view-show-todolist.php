<?php
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../view/view-add-todolist.php";
require_once __DIR__ . "/../view/view-remove-todolist.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../business-logic/show-todolist.php";
require_once __DIR__ . "/../business-logic/add_todolist.php";
require_once __DIR__ . "/../business-logic/remove_todolist.php";


function viewShowTodoList()
{
    // saat input x program berhenti
    while (true){
        showTodoList();
        echo "MENU".PHP_EOL;
        echo "[1] Tambah Todo".PHP_EOL;
        echo "[2] Hapus Todo".PHP_EOL;
        echo "[x] Keluar".PHP_EOL;
        $pilihan = input("pilih");
            if($pilihan == "1"){
                viewAddTodoList();

            }else if($pilihan == "2"){

                viewRemoveTodoList();
            }else if($pilihan == "x"){
                break;  
            }else{
                echo "pilihan tidak dimengerti".PHP_EOL;
            }
    }
    
    echo "sampai jumpa:^".PHP_EOL;
}