<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$connection->exec("INSERT INTO comment(email, comment) VALUES ('ekos@mail.com', 'haaloworld')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;