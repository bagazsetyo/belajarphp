<?php
class Example{

    public string|int|bool|array $data;

}

$ex = new Example();
$ex->data = 'ba';
$ex->data = 1;
$ex->data = 20;
$ex->data = [20,20];

function helow(string|array $tes){

}

helow([]);
helow('adsa');