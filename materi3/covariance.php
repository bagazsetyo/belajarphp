<?php

use Data\Food;

require_once "Data/Animal.php";
    require_once "Data/Food.php";
    require_once "Data/AnimalShelter.php";

    $catshelter = new \Data\CatShellter();
    $cat = $catshelter->adopt("Luna");
    $cat->eat(new \Data\AnimalFood());

    $dogshelter = new \Data\DogShellter();
    $dog = $dogshelter->adopt("Luna");
    $dog->eat(new \Data\Food());

    