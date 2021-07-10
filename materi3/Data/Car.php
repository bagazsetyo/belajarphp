<?php

    namespace Data;

    interface HasBrand
    {
        function getBrand():string;
    }
    interface IsMaintenance
    {
        function getMT():string;
    }
    interface Car extends HasBrand{

        function run():int;
        function drive():int;

    }
    class Avanza implements Car{

        public function run():int
        {
            return 4;
        }
        public function drive():int
        {
            return 4;
        }
        public function getBrand(): string
        {
            return "Hellow";
        }
    }
    