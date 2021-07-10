<?php
    require_once "Data/Manager.php";

    $bagas = new Manager();
    
    $bagas->name = "Bagas";
    $bagas->sayHello("Budi");

    $vp = new VicePresident();
    
    $vp->name = "Ini Vp";
    $vp->sayHello("Ini Manager");
