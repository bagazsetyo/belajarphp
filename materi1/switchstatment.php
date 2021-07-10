<?php
    $nilai = "D";

    if($nilai == "A"){
        echo "nilai A" . PHP_EOL;
    }elseif ($nilai == "B") {
        echo "nilai B" . PHP_EOL;
    }elseif ($nilai == "C") {
        echo "nilai C" . PHP_EOL;
    }elseif ($nilai == "E") {
        echo "nilai E" . PHP_EOL;
    }elseif ($nilai == "F") {
        echo "nilai F" . PHP_EOL;
    }else{
        echo "nilai 0" . PHP_EOL;
    }

    switch ($nilai) {
        case 'A':
            echo "Anda lulus dengan sangat baik" . PHP_EOL;
            break;
        case 'B':
            echo "Anda lulus" . PHP_EOL;
            break;
        case 'C':
            echo "Anda Tidak lulus" . PHP_EOL;
            break;
        
        default:
            echo "Anda salah jurusan" . PHP_EOL;
            break;
    }
    

    switch ($nilai):
        case 'A':
            echo "Anda lulus dengan sangat baik" . PHP_EOL;
            break;
        case 'B':
            echo "Anda lulus" . PHP_EOL;
            break;
        case 'C':
            echo "Anda Tidak lulus" . PHP_EOL;
            break;
        
        default:
            echo "Anda salah jurusan" . PHP_EOL;
            break;
    endswitch;