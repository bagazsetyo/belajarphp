<?php
    $counter = 1;
    for ($counter; $counter <= 10; $counter++) { 
        echo $counter . " Hello world" . PHP_EOL;
    }

    for ($counter; $counter <= 10; $counter++): 
        echo $counter . " Hello world" . PHP_EOL;
    endfor;