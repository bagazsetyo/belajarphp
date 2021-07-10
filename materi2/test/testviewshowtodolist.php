<?php
    require_once "../view/showtodolist.php";
    require_once "../BussinesLogic/addtodolist.php";

    addtodolist("PHP");
    addtodolist("JS");
    addtodolist("AJAX");
    addtodolist("VUE");
    addtodolist("LARAVEL");
    addtodolist("CI");

    showviewtodolist();