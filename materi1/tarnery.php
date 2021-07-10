<?php
    $gender = "wanita";

    if($gender == "pria"){
        echo "hi brow" . PHP_EOL;
    }else{
        echo "hi nona" . PHP_EOL;
    }

    echo $gender == "pria" ? 'Hi brow' : 'Hi nona';
