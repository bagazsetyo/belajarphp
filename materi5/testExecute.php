<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id,nama,email)
    VALUES ('eko','Eko','Eko@mail.com');
SQL;

$connection->exec($sql);
$connection = null;