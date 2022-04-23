<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../view/TodolistView.php";
require_once __DIR__ . "/../Utils/InputHelper.php";


use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist(): void{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Marsel");
    $todolistService->addTodolist("Dindoet");
    $todolistService->addTodolist("ahahay");

    $todolistView->showTodolist();
}

// testViewShowTodolist();
function testViewAddTodolist(): void{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Marsel");
    $todolistService->addTodolist("Dindoet");
    $todolistService->addTodolist("ahahay");
    
    $todolistView->showTodolist();

    $todolistView->addTodolist();
    
    $todolistView->showTodolist();
}
// testViewAddTodolist();
function testViewRemoveTodolist(): void{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Marsel");
    $todolistService->addTodolist("Dindoet");
    $todolistService->addTodolist("ahahay");
    
    $todolistView->showTodolist();

    $todolistView->removeTodolist();
    
    $todolistView->showTodolist();
    $todolistView->removeTodolist();
    $todolistView->showTodolist();
}
testViewRemoveTodolist();