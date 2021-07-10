<?php

    require_once "Data/Programmer.php";

    $programmer = new Company();
    $programmer->programmer = new Programmer("Eko");
    var_dump($programmer);
    $programmer->programmer = new BackendProgrammer("Eko2");
    var_dump($programmer);
    $programmer->programmer = new FrontendProgrammer("Eko3");
    var_dump($programmer);

    sayHelloProgrammer(new Programmer("eko"));
    sayHelloProgrammer(new BackendProgrammer("eko"));
    sayHelloProgrammer(new FrontendProgrammer("eko"));