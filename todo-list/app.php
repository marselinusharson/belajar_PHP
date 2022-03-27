<?php

require_once __DIR__. "/BusinessLogic/addTodoList.php";
require_once __DIR__."/BusinessLogic/showTodoList.php";
require_once __DIR__. "/BusinessLogic/removeTodoList.php";
require_once __DIR__. "/view/viewAdd.php";
require_once __DIR__. "/view/viewShow.php";
require_once __DIR__. "./view/viewRem.php";
require_once __DIR__. "/Model/Todolist.php";

echo "Aplikasi TODOLIST".PHP_EOL;
viewShowTodoList();