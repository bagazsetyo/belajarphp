<?php

$value = 0;
$result = '';

switch($value){
    case 'A':
    case 'B':
    case 'C':
        $result = 'Anda Lulus';
        break;
    case 'D':
        $result = 'Anda Tidak Lulus';
        break;
    case 'D':
        $result = 'Anda Salah Jurusan';
        break;
    default:
        $result = 'nilai apa ?';
}

echo $result . PHP_EOL;

$result = match($value){
    "A","B","C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Anda Salah Jurusan",
    default => 'nilai apa itu'
};
echo $result . PHP_EOL;

$value = 80;
$result = match (true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    default => 'E'
};

echo $result . PHP_EOL;

$name = "Mr. Eko";
$result = match (true){
    str_contains($name, 'Mr.') => "Hallow sir",
    str_contains($name, 'Mrs.') => "Hallow mam",
    default => 'E'
};

echo $result . PHP_EOL;
