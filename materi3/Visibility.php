<?php
    require_once "Data/Product.php";
    
    $product = new Product("apel", 10000);

    // echo $product->name . PHP_EOL;

    echo $product->getName();

    $dummy = new Dummy("bagas", 2000);
    $dummy->info();

    