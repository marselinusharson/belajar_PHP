<?php
/* 
menghapus todo dari list
*/

function removeTodoList($idx): bool
{
    global $todoList;
    if($idx > sizeof($todoList)){
        return false;
    }
    for($i=$idx;$i<sizeof($todoList);$i++){
        $todoList[$i] = $todoList[$i + 1];
    }
    unset($todoList[sizeof($todoList)]);
    return true;
}