<?php

$host = 'localhost';
$port = 3306;
$db = 'belajar_php_databases';
$user = 'root';
$pass = '';

try{
    $conn = new PDO("mysql:host=$host:$port;dbname=$db",$user,$pass);

    echo "Koneksi ke databases success";

    $conn = null;
}catch(Exception $e){
    echo "gagal terkoneksi ke databases : " . $e->getMessage();
}