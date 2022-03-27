<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/addTodoList.php";
require_once "../BusinessLogic/showTodoList.php";
global $todoList;
addTodoList("main");
addTodoList("belajar oop");
showTodoList();
var_dump($todoList);