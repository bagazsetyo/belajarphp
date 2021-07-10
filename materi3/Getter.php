<?php

    require_once "Data/Category.php";

    $cat = new Category();
    $cat->setName("uwu");
    $cat->setExpensive(true);

    $cat->setName("");
    echo "name : {$cat->getName()}" . PHP_EOL;
    echo "Expensive : {$cat->isExpensive()}" . PHP_EOL;  