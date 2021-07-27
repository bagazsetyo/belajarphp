<?php

$matches = [];
$result = (bool)preg_match_all("/eko|awan|edy/i","Eko Kurniawan", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/Anjing|bangsat/i","***","dasar lu anjing");

var_dump($result);


$result = preg_split("/[\s,-]/", "Eko Masuk Pak Eko, Programmer");
// $join = join("-",$result);

var_dump($result);