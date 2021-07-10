<?php
    
    require_once __DIR__ . "/../model/Todolist.php";
    require_once __DIR__ . "/../BussinesLogic/showtodolist.php";
    require_once __DIR__ . "/../view/addtodolist.php";
    require_once __DIR__ . "/../view/removetodolist.php";
    require_once __DIR__ . "/../helper/input.php";

    function showviewtodolist(){

        while (true) {
            showtodolist();

            echo "Menu " . PHP_EOL;
            echo "1 Tambah Todo " . PHP_EOL;
            echo "2 Hapus Todo " . PHP_EOL;
            echo "x keluar Todo " . PHP_EOL;

            $pilih = input("pilih");

            if ($pilih == 1) {
                addviewtodolist();
            }elseif ($pilih == 2) {
                removeviewtodolist();
            }elseif ($pilih == 3) {
                break;
            }else{
                echo "Pilihan tidak dimengerti" . PHP_EOL;
            }
        }


        echo "Selamat Tinggal";
    }