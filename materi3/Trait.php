<?php

    require_once "Data/Goodbye.php";
    use Data\{Hello, Person, Goodbye};

    $person = new Person();
    $person->goodbye("joki");
    $person->hello("joko");
