<?php
// tampilan menu tambah todolist
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../business-logic/add_todolist.php";
function viewAddTodoList()
{
    echo "MENAMBAH TODO".PHP_EOL;
    // menerima input berupa string todo
    // $todo akan menjadai argumen yang dikirim ke fungsi addTodoList
    $todo = input ("Todo ([x] untuk batal) ");
    if($todo == "x"){
        echo "Batal menambah todo".PHP_EOL;
    }else{
        addTodoList($todo);
    }
}