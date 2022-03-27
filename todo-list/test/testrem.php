<?php
require_once "../Model/Todolist.php";
require_once "../BusinessLogic/removeTodoList.php";
require_once "../BusinessLogic/showTodoList.php";
require_once "../BusinessLogic/addTodoList.php";

addTodoList("main");
addTodoList("main");
addTodoList("main");
showTodoList();
removeTodoList(1);
showTodoList();
$success = removeTodoList(6);
var_dump($success);