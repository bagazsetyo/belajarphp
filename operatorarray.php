<?php
    $a = array('name_1' => 'first name');
    $b = array('name_2' => 'last name');

    $c = $a + $b;
    var_dump($c);

    
    $a = array(
        'name_1' => 'first name',
        '1' => 'first',
    );
    $b = array(
        'name_2' => 'last name',
        '2' => 'first name',
    );

    var_dump($a == $b);
    var_dump($a === $b);
