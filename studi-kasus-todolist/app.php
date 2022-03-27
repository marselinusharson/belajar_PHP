<?php
require_once __DIR__ . "/model/todolist.php";
require_once __DIR__ . "/business-logic/show-todolist.php";
require_once __DIR__ . "/business-logic/add_todolist.php";
require_once __DIR__ . "/business-logic/remove_todolist.php";
require_once __DIR__ . "/view/view-show-todolist.php";
require_once __DIR__ . "/view/view-add-todolist.php";
require_once __DIR__ . "/view/view-remove-todolist.php";
require_once __DIR__ . "/helper/input.php"; 

echo "=====================Aplikasi Todolist======================".PHP_EOL;
viewShowTodoList();