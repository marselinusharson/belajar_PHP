<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void{
    
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    
    $todolistService->showTodolist();
}
testShowTodolist();

function testAddTodolist(): void{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("UTS Algoritma dan Struktur Data");
    $todolistService->addTodolist("belajar Python");
    $todolistService->addTodolist("belajar Graphic design");
    $todolistService->addTodolist("belajar Public speaking");
    $todolistService->addTodolist("Ujian SIE");

    // $todolistService->showTodolist();
}
// testAddTodolist();

function testRemoveTodolist(): void{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->removeTodolist(4) .PHP_EOL;
    $todolistService->removeTodolist(3) .PHP_EOL;

}

// testRemoveTodolist();