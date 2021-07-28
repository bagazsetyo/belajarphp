<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$nama = 'Eko';
$email = 'Eko@mail.com';

$sql = "SELECT * FROM customers where nama = ? AND email = ?";

$result = $connection->prepare($sql);
$result->execute([$nama,$email]);

if($row = $result->fetch()){
    echo "Sukses Login :" . $row['nama'] . PHP_EOL;
}else{
    echo "Gagal Login :" . PHP_EOL;
}

$connection = null;