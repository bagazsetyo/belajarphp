<?php

    require_once "Data/Person.php";

    define("APLICATION", "Belajar PHP OOP");

    const APP_VERSION = "1.0.0";

    echo APLICATION . PHP_EOL;
    echo APP_VERSION . PHP_EOL;

    echo Person::AUTHOR;
