<?php
    $data = [
        // "name" => "ada"
    ];

    if(isset($data['name'])){
        echo $data['name'] . PHP_EOL;
    }else{
        echo "kosong" . PHP_EOL;
    }

    echo $data['name'] ?? "kosong";