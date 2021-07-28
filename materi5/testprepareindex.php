<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$nama = 'Eko';
$email = 'Eko@mail.com';

$sql = "SELECT * FROM customers where nama = ? AND email = ?";

$result = $connection->prepare($sql);
$result->bindParam(1, $nama);
$result->bindParam(2, $email);
$result->execute();

$success = false;
$find_user = false;
foreach($result as $row){
    $success = true;
    $find_user = $row['nama'];
}

if($success){
    echo "Sukses Login :" . $find_user . PHP_EOL;
}else{
    echo "Gagal Login :" . PHP_EOL;
}

$connection = null;