<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";

$statment = $connection->query($sql);

foreach($statment as $s){
    $id = $s['id'];
    $nama = $s['nama'];
    $email = $s['email'];

    echo "id $id, nama $nama, email $email" . PHP_EOL;
}

$connection = null;