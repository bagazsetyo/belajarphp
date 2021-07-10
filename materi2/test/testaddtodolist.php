<?php
    require_once "../model/Todolist.php";
    require_once "../BussinesLogic/addtodolist.php";

    addtodolist("Eko");
    addtodolist("Patrio");
    addtodolist("test");

    var_dump($todolist);