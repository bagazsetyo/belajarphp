<?php
require_once __DIR__ . '/getConnetion.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statment = $connection->query($sql);
$costomers = $statment->fetchAll();

var_dump($costomers);

$connection = null;