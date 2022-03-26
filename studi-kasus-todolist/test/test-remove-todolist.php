<?php
require_once "../model/todolist.php";
require_once "../business-logic/remove_todolist.php";
require_once "../business-logic/add_todolist.php";
require_once "../business-logic/show-todolist.php";

addTodoList("Marselinus");
addTodoList("main bola");
addTodoList("main game");

showTodoList();
removeTodoList(3);
showTodoList();
removeTodoList(2);
showTodoList();
$success = removeTodoList(4);
var_dump($success);
showTodoList();