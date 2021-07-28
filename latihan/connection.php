<?php

function getConnection(): PDO
{
    $host = 'localhost';
    $port = 3306;
    $db = 'todolist';
    $user = 'root';
    $pass = '';

    return new PDO("mysql:host=$host:$port;db=$db", $user, $pass);
}

getConnection();