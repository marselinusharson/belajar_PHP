<?php

require_once "../view/view-remove-todolist.php";
require_once "../model/todolist.php";
require_once "../business-logic/add_todolist.php";
require_once "../business-logic/show-todolist.php";

addTodoList("eko");
addTodoList("eshow");
addTodoList("loremipsum");
showTodoList();
viewRemoveTodoList();
showTodoList();