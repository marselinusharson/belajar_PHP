<?php
/* 
menghapus todo dari list
*/

function removeTodoList($idx): bool
{
    // kembalian fungsi berupa boolean

    global $todoList;
    // menghapus todo sesuai nomor atau index
    if($idx > sizeof($todoList)){
        return false;
    }
    // data pada elemen yang dihapus akan diisi data pada index diatasnya
    //sehingga  mengalami pergeseran posisi
    for($i=$idx;$i<sizeof($todoList);$i++){
        $todoList[$i] = $todoList[$i + 1];
    }
    unset($todoList[sizeof($todoList)]);
    return true;
}