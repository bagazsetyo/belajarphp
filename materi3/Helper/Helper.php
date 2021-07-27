<?php
    namespace Helper;

    class MathHelper{
        static public string $name = "Math Helper";

        static public function sum(int ...$number):int
        {
            $total = 0;
            foreach($number as $n){
                $total += $n;
            }

            return $total;
        }
    }