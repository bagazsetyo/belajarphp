<?php
    require_once "../view/addtodolist.php";
    require_once "../BussinesLogic/showtodolist.php";
    require_once "../BussinesLogic/addtodolist.php";

    addtodolist("PHP");
    addtodolist("HTML");
    addtodolist("JS");

    addviewtodolist();

    showtodolist();