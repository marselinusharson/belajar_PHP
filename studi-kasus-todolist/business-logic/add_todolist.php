<?php

/* 
menambahkan todo ke dalam list
*/

function addTodoList(string $todo)
{
    global $todoList;
    // string yang diinput akan dimasukkan pada index terakhir pada array:
    $number = sizeof($todoList)+ 1;
    $todoList[$number] = $todo; 
}