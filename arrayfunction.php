<?php
    $items = [1,2,3,4,5,6,7,8,9];

    $mapfunction = fn($value) => $value * 10;

    $dataMap = array_map($mapfunction, $items);

    var_dump($dataMap);

    $rsot = rsort($items);
    var_dump($rsot);

    $keys = array_keys($items);
    var_dump($keys);

    $values = array_values($items);
    var_dump($values);