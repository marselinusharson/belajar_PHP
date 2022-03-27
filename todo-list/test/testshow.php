<?php
require_once "../Model/Todolist.php";
require_once "../BusinessLogic/showTodoList.php";

global $todoList;
$todoList[1] = "Main";
$todoList[2] = "Makan";
$todoList[3] = "Mandi";
showTodoList();