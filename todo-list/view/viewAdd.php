<?php

require_once __DIR__."/../BusinessLogic/addTodoList.php";
require_once __DIR__."/../Model/Todolist.php";
require_once __DIR__."/../Utils/input.php";

function viewAddTodoList(){
        echo "Tambah Todo".PHP_EOL;
        $todo = input ("input Todo ([x] jika ingin batal)");
        if($todo == "x"){
            echo "todo tidak ditambahkan".PHP_EOL;
        }else{
            addTodoList($todo);
        }
}