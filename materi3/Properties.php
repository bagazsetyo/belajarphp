<?php
    require_once "Data/Person.php";

    $person = new Person();
    $person->name = "Bagas";
    $person->address = "Magelang";
    $person->country = "Indonesia";

    var_dump($person);

    echo "Name : $person->name" . PHP_EOL;
    echo "Address : $person->address" . PHP_EOL;
    echo "Country : $person->country" . PHP_EOL;

    $person2 = new Person();
    $person2->name = "Setyo";

    
    echo "Name : $person2->name" . PHP_EOL;
    echo "Address : $person2->address" . PHP_EOL;
    echo "Country : $person2->country" . PHP_EOL;