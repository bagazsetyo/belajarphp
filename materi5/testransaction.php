<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$connection->beginTransaction();
$connection->exec("INSERT INTO comment(email, comment) VALUES ('testing@mail.com','hi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('asd@mail.com','halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('gga@mail.com','oi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('gga@mail.com','oi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('gga@mail.com','oi')");

$connection->commit();

$connection = null;