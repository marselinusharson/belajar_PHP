<?php

require_once "../view/viewShow.php";
require_once "../BusinessLogic/addTodoList.php";
require_once "../view/viewAdd.php";

addTodoList("main");
viewShowTodoList();