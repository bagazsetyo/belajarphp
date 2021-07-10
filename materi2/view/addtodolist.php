<?php

    require_once __DIR__ . "/../model/Todolist.php";
    require_once __DIR__ . "/../helper/input.php"; 
    require_once __DIR__ . "/../BussinesLogic/addtodolist.php";    

    function addviewtodolist(){

        echo "Menambah Todolist " . PHP_EOL;

        $todo = input("Todo (3) untuk batal");

        if($todo == 3){
            echo "Batal Menambah todo";
        }else{
            addtodolist($todo);
        }

    }