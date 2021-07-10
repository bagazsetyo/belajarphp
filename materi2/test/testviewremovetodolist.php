<?php
    require_once "../model/Todolist.php";
    require_once "../view/removetodolist.php";
    require_once "../BussinesLogic/showtodolist.php";
    require_once "../BussinesLogic/addtodolist.php";

    addtodolist("PHP");
    addtodolist("HTML");
    addtodolist("JS");
    addtodolist("AJAX");
    addtodolist("CI");
    addtodolist("VUE");
    addtodolist("NODE");
    addtodolist("LARAVEL");

    showtodolist();

    removeviewtodolist();

    showtodolist();