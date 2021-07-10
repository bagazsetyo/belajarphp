<?php

    class Product{

        protected string $name;
        protected int $price;

        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function getName()
        {
            return $this->name . PHP_EOL;
        }

    }

    class Dummy extends Product{
        public function info()
        {
            return "ada $this->name" . PHP_EOL;
        }
    }