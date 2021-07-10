<?php

    require_once __DIR__ . "/model/Todolist.php";
    require_once __DIR__ . "/BussinesLogic/showtodolist.php";
    require_once __DIR__ . "/BussinesLogic/removetodolist.php";
    require_once __DIR__ . "/BussinesLogic/addtodolist.php";
    require_once __DIR__ . "/view/showtodolist.php";
    require_once __DIR__ . "/view/removetodolist.php";
    require_once __DIR__ . "/view/addtodolist.php";
    require_once __DIR__ . "/helper/input.php";
    echo "Todolist" . PHP_EOL;

    showviewtodolist();