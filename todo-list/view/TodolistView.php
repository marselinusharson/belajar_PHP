<?php
namespace View;
use Service\TodolistService;
use Helper\InputHelper;
class TodolistView{
    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
        }
        function showTodolist(){?>
        <?php
            if(isset($_POST['todo'])){
                $todo = htmlspecialchars($_POST['todo']);
                $this->todolistService->addTodolist($todo);
            }
                
            if(isset($_POST['delete_todo'])){
                $id = $_POST['delete_todo'];
                $this->todolistService->removeTodolist($id);
            }?>
            
            <div class="container">
                <form action="" method="post">
                    <div class="d-flex justify-content-center">
                        <div class="mb-3 col-md-8 ">
                            <input type="text" class="form-control" name="todo" id="todo" placeholder="todo">
                        </div>
                        <div class="ms-3">
                            <button  type="submit" name="add_todo" class="btn btn-primary me-3">Add Todo</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-8">
                        <?php foreach( $this->todolistService->showTodolist() as $value):?>
                            <ol class="list-group">
                                <li class="list-group-item mb-1 shadow-sm">
                                    <?= $value->getTodo(); ?> 
                                    <form class="float-end" action="" method="POST">
                                        <button type="submit" name="delete_todo" value="<?=$value->getId()?>" class="btn btn-danger">Done</button>
                                    </form>
                                </li>
                            </ol>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
                    
        <?php
        }
        
}