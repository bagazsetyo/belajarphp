<?php
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id,nama,email)
    VALUES ('eko12','Eko','Eko@mail.com');
SQL;

$connection->exec($sql);
$connection = null;