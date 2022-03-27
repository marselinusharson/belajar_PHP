<?php

function showTodoList(){
    global $todoList;
    echo "TODOLIST".PHP_EOL;
    foreach($todoList as $item =>$value){
        echo "$item.$value".PHP_EOL;
    }
}