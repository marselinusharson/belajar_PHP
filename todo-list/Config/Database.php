<?php

namespace Config{
    use \PDO;
    class Database{
        static function getConnection(): \PDO
        {
            $host = 'localhost';
            $port = 3306;
            $db = 'belajar_php_todolist';
            $username = 'root';
            $password ='';
            return new PDO("mysql:host=$host:$port;dbname=$db", $username, $password);
        }
    }
}