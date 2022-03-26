<?php
require_once "../model/todolist.php";
require_once "../business-logic/add_todolist.php";

addTodoList("Marselinus");
addTodoList("Romo");
addTodoList("Randi");

var_dump($todoList);

?>