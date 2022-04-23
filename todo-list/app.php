<?php
require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/view/TodolistView.php";
require_once __DIR__ . "/Config/Database.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

session_start();
$connection = \Config\Database::getConnection();
$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new todolistView($todolistService);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="content">
    <?php if(isset($_SESSION['message'])):?>

    <h5 class="alert alert-success"><?= $_SESSION['message']?></h5>
    <?php
    unset($_SESSION['message']);
    endif;?>
        <h1 class='text-center'>Todolist App</h1>
    </div>
    <?= $todolistView->showTodolist()?>
</body>
</html>