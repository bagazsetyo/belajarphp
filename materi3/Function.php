<?php
    require_once "Data/Person.php";

    $bagas = new Person("Bagas","Jogja");
    
    $bagas->name = "Bagas";
    $bagas->sayHello("Budi");

    $anas = new Person("Bagas","Jogja");
    $anas->name = "Anas";
    $anas->sayHello(null);

    $bagas->info();