<?php
// require_once __DIR__ . '/getConnetion.php';
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$connection->beginTransaction();
$connection->exec("INSERT INTO datalist(lists) VALUES ('testing@mail.com')");
$connection->commit();

$id = $connection->lastInsertId();

$connection = null;