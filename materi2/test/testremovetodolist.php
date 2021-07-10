<?php
    require_once "../model/Todolist.php";
    require_once "../BussinesLogic/addtodolist.php";
    require_once "../BussinesLogic/showtodolist.php";
    require_once "../BussinesLogic/removetodolist.php";

    addtodolist("Eko");
    addtodolist("Patrio");
    addtodolist("Budi");
    addtodolist("Joki");
    addtodolist("Adit");

    showtodolist();

    removetodolist(2);
    
    showtodolist();