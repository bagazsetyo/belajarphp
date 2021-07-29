<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$nama = 'ANI';
$email = 'ANI@mail.com';
$id = strtolower($nama);

$sql = "INSERT INTO customers(id, nama, email) VALUES (:id, :nama, :email)";

$result = $connection->prepare($sql);
$result->bindParam("id", $id);
$result->bindParam("nama", $nama);
$result->bindParam("email", $email);
$result->execute();

$connection = null;