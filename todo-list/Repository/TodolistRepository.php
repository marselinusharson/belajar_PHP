<?php
namespace Repository{
    use Entity\Todolist;
    
    interface TodolistRepository{
        function save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findAll():array;
    }

    class TodolistRepositoryImpl implements TodolistRepository{

        private  array $todolist = array();
        private \PDO $connection;

        public function __construct(\PDO $connection){
            $this->connection= $connection;
        }
        function findAll():array{
            // return $this->todolist;
            $sql = "SELECT id, todo FROM todolist";
            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $result = [];

            foreach($statement as $row){
                $todolist = new Todolist();
                $todolist->setId($row['id']);
                $todolist->setTodo($row['todo']);

                $result[] = $todolist;
            }

            return $result;
        }

        function save(Todolist $todolist): void{

            // gunakan database;
            $sql = "INSERT INTO todolist(todo) VALUES(?)";
            $statement = $this->connection->prepare($sql);
            $statement_execute = $statement->execute([$todolist->getTodo()]);
            if($statement_execute){
                $_SESSION['message'] = "Inserted Successfully";
                header("Location: /app.php");
                exit();
            }else{
                $_SESSION['message'] = "Not Inserted";
                header("Location: /app.php");
                exit();
            }
        }
        
        function remove(int $number): bool{
        
            try{
                $sql = "DELETE FROM todolist WHERE id = ?";
                $statement= $this->connection->prepare($sql);
                $sql_execute = $statement->execute([$number]);
                
                if($sql_execute){
                    $_SESSION['message'] = "Delete Successfully";
                    header("Location: /app.php");
                    exit();
                }else{
                    $_SESSION['message'] = "Not Deleted";
                    header("Location: /app.php");
                    exit();
                }
    
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
}
