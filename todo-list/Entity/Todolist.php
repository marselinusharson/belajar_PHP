<?php

namespace Entity{

    class Todolist{
        // variable dengan visibility private tidak bisa diakses secara langsung dari luar
        private $id;

        private string $todo;

        public function __construct(string $todo = ""){
            $this->todo = $todo;
        }
        // method getter dan setter untuk mengakses variable dari luar class
        public function getTodo():string{
            return $this->todo;
        }
        public function setTodo($todo): void{
            $this->todo = $todo;
        }
        public function getId():string{
            return $this->id;
        }
        public function setId($id): void{
            $this->id = $id;
        }
    }
}
?>