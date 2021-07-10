<?php
    $nilai = 70;
    $absen = 90;

    if ($nilai >= 90 && $absen > 75){
        echo "Nilai A" . PHP_EOL;
    } elseif ($nilai >= 80){
        echo "Nilai B" . PHP_EOL;
    } elseif ($nilai >= 70){
        echo "Nilai C" . PHP_EOL;
    } elseif ($nilai >= 60){
        echo "Nilai D" . PHP_EOL;
    } elseif ($nilai >= 50){
        echo "Nilai E" . PHP_EOL;
    } else {
        echo "MAAF ANDA TIDAK LULUS" . PHP_EOL;
    }

    
    if ($nilai >= 90 && $absen > 75):
        echo "Nilai A" . PHP_EOL;
     elseif ($nilai >= 80):
        echo "Nilai B" . PHP_EOL;
     elseif ($nilai >= 70):
        echo "Nilai C" . PHP_EOL;
     elseif ($nilai >= 60):
        echo "Nilai D" . PHP_EOL;
     elseif ($nilai >= 50):
        echo "Nilai E" . PHP_EOL;
     else :
        echo "MAAF ANDA TIDAK LULUS" . PHP_EOL;
     endif;
    