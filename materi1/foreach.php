<?php
    $name = ["Bagas", "Setyo", "Nugrogo"];

    for ($i=0; $i < count($name); $i++) { 
        echo "data ke $i = $name[$i]". PHP_EOL;
    }

    foreach ($name as $n){
        echo "name " . $n . PHP_EOL;
    }

    $names = [
        'first' => 'fist_name',
        'last' => 'lastname'
    ];

    foreach ($names as $index => $value){
        echo "$index : $value" . PHP_EOL;
    }