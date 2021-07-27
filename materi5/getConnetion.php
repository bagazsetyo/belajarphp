<?php

function getConnection(): PDO
{
    $host = 'localhost';
    $port = 3306;
    $db = 'belajar_php_databases';
    $user = 'root';
    $pass = '';

    return new PDO("mysql:host=$host:$port;dbname=$db",$user,$pass);
}