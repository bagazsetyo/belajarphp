<?php
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM datalist";
$statment = $connection->query($sql);
$costomers = $statment->fetchAll();

var_dump($costomers);

$connection = null;