<?php

require_once "../view/viewRem.php";
require_once "../Model/Todolist.php";
require_once "../BusinessLogic/showTodoList.php";
require_once "../BusinessLogic/addTodoList.php";


addTodoList("main0");
addTodoList("main1");
addTodoList("main2");
addTodoList("main3");
addTodoList("main4");
showTodoList();
viewRemoveTodoList();
showTodoList();
viewRemoveTodoList();
showTodoList();