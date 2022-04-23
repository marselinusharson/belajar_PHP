<?php

namespace Service;
    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService{
        function showTodolist(): array;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }
    
    class TodolistServiceImpl implements TodolistService{
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository){
            $this->todolistRepository = $todolistRepository;
        }
        function showTodolist(): array{
            return $this->todolistRepository->findAll();
        }

        function addTodolist(string $todo): void{
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
        }
        
        function removeTodolist(int $number): void{
            $this->todolistRepository->remove($number);
        }

    }