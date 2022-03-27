<?php

function removeTodoList(int $idx):bool{
    global $todoList;
    if($idx > sizeof($todoList)){
        return false;
    }
    for($i = $idx;$i<sizeof($todoList);$i++){
        $todoList[$idx]= $todoList[$idx +1];
    }
    unset($todoList[sizeof($todoList)]);
    return true;
}