<?php

class Product{

    public function __construct(public string $id, 
                                public string $name, 
                                public int $price, 
                                public int $qty)
    {
    }

}

$prod = new Product(1, "mie", 15000, 1);
var_dump($prod);