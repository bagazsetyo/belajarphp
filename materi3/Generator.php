<?php

function getGenap(int $max): iterator
{
    $array = [];

    for ($i=1; $i <= $max; $i++) { 
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (getGenap(100) as $key => $value) {
    echo "Genap : $value" . PHP_EOL;
}


function getGanjil(int $max): iterator
{
    for ($i=1; $i <= $max; $i++) { 
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $key => $value) {
    echo "Ganjil : $value" . PHP_EOL;
}
