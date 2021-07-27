<?php

    $datetime = new DateTime();
    $datetime->setDate(1945, 07, 01);
    $datetime->setTime(10,10,10);

    $datetime->add(new DateInterval('P1Y'));

    $minusMounth = new DateInterval('P1M');
    $minusMounth->invert = true;
    $datetime->add($minusMounth);

    var_dump($datetime);

    $now = new DateTime();
    $now->setTimezone(new DateTimeZone("Asia/Jakarta"));
    var_dump($now);

    echo $now->format('l D M Y');