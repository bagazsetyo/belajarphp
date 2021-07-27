<?php

    $array = [
        "firstname" => "bagas",
        "middlename" => "setyo",
        "lastname" => "nugroho",
    ];

    $object = (object)$array;

    var_dump($object);

    echo "first name = $object->firstname" . PHP_EOL;
    echo "middle name = $object->middlename" . PHP_EOL;
    echo "last name = $object->lastname" . PHP_EOL;

    $array2 = (array) $object;
    var_dump($array2);

    
    require_once "Data/Person.php";
    $person = new Person("bagas", "setyo");

    $arrayperson = (array)$person;

    var_dump($arrayperson);