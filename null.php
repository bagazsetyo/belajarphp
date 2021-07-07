<?php
    $name = "eko";
    $name = null;

    $age = null;

    echo "Nmae : ";
    echo $name;
    echo "\n";
    
    echo "Age : ";
    echo $age;
    echo "\n";

    //is null
    echo "Is name null : ";
    echo is_null($name);
    echo "\n";

    $name = "eko";
    unset($name);//delet variable
    // isset($name);//delet variable

    var_dump(isset($name));