<?php
    namespace Helper{

        class InputHelpers{

            static function input($input): string
            {
                echo "$input : ";
                $result = fgets(STDIN);
                return $result . PHP_EOL;
            }

        }

    }