<?php
/* 
menampilkan todo dalam list
*/
function showTodoList()
{
    // menampilkan todolist dengan iterasi 
    global $todoList;
    echo "TODOLIST".PHP_EOL;
    foreach($todoList as $number =>$value){
        echo"$number. $value".PHP_EOL;
    }
}