<?php

    require_once "Data/Manager.php";

    $manager = new Manager();
    $manager->name = "Badu";
    $manager->sayHello("Leni");
    
    $vp = new VicePresident();
    $vp->name = "Badu";
    $vp->sayHello("Leni");