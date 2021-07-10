<?php
    $angka = array(1,2,3,4,5,6,7,8,9);
    var_dump($angka[1]);

    $string = ["motor","mobil","sepeda"];
    var_dump($string[2]);

    $data = array(1,2,3,4);
    $count = count($data);
    var_dump($count);

    $update = ["motor","mobil","sepeda"];
    $update[2] = "testing";
    var_dump($update);

    unset($update[0]);

    var_dump($update);

    $update[] = "kapal";
    var_dump($update);
    var_dump(count($update));


    //map
    $map = array(
            "name" => "bagas",
            "age" => 20, 
    );
    
    var_dump($map['age']);

    //array in array
    
    $map = array(
        "name" => "bagas",
        "age" => 20,
        "address" => array("address1" => "magelang", "address2" => "jogja"), 
    );
    var_dump($map['address']['address1']);