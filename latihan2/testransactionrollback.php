<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$connection->beginTransaction();
$connection->exec("INSERT INTO comment(email, comment) VALUES ('budi@mail.com','hi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('budi@mail.com','halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('budi@mail.com','oi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('budi@mail.com','oi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('budi@mail.com','oi')");

$connection->rollBack();

$connection = null;