<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

while (true) {

    show();

    echo "Menu " . PHP_EOL;
    echo "1 Tambah Todo " . PHP_EOL;
    echo "2 Hapus Todo " . PHP_EOL;
    echo "3 Edit Todo " . PHP_EOL;
    echo "0 keluar Todo " . PHP_EOL;

    $pilih = input("Pilih");

    if ($pilih == 1) {
        add();
    }elseif ($pilih == 2) {
        delete();
    }elseif ($pilih == 3) {
        edit();
    }elseif ($pilih == 0) {
        break;
    }else{
        echo "Pilihan tidak dimengerti" . PHP_EOL;
    }
    
    $connection = null;
}

function show(){
$connection = getConnection();
$sql = "SELECT * FROM datalist";
$statment = $connection->query($sql);
$list = $statment->fetchAll();
    foreach($list as $l){
        echo $l['id'] . ' ' . $l['lists'];
    }
}

function add(){
    $pilih = input("tambah data (0 untuk keluar)");

    $connection = getConnection();
    $connection->beginTransaction();
    $connection->exec("INSERT INTO datalist(lists) VALUES ('$pilih')");
    $connection->commit();
}
function delete(){
    $pilih = input("tambah data (0 untuk keluar)");

    $connection = getConnection();
    $sql = "DELETE FROM datalist WHERE id = ?";
    $result = $connection->prepare($sql);
    $result->bindParam(1, $pilih);
    $result->execute();
    
    $success = false;
    foreach($result as $r){
        $success = true;
    }
    if($success){
        echo "berhasil hapus" . PHP_EOL;
    }else{
        echo "data tidak ada" . PHP_EOL;
    }
}
function edit(){
    $pilih = input("pilih edit (0 untuk keluar)");

    $connection = getConnection();
    $sql = "SELECT * FROM datalist WHERE id = ?";
    $result = $connection->prepare($sql);
    $result->bindParam(1, $pilih);
    $result->execute();

    $success = false;
    foreach($result as $r){
        $success = true;
    }
    if($success){
        update($pilih);
    }else{
        echo "data tidak ada" . PHP_EOL;
    }
}

function update($id){
    $pilih = input("edit id (0 untuk keluar)");
    $connection = getConnection();
    $connection->beginTransaction();
    $connection->exec("UPDATE datalist SET lists = '$pilih' WHERE id = $id");
    $connection->commit();
}

function input(string $info):string 
{
    echo "$info : ";
    $result = fgets(STDIN);
    return $result . PHP_EOL;
}