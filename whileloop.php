<?php
    $a = 1;
    while ($a <= 10) {
        echo "While Loop ke-" . $a ++ . PHP_EOL;
    }
    $a = 1;
    while ($a <= 10):
        echo "While Loop ke-" . $a ++ . PHP_EOL;
    endwhile;