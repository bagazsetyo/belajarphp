<?php
    require_once __DIR__ . "/../BussinesLogic/removetodolist.php";
    require_once __DIR__ . "/../helper/input.php";

    function removeviewtodolist(){
        
        echo "Menghapus Todolist " . PHP_EOL;

        $pilihan = (int) input("Nomor (0 untuk batalkan)");

        if($pilihan == 0){
            echo "Batal menghapus todo";
        }else{
            
            $success = removetodolist($pilihan);

            if ($success) {
                echo "Sukses menghapus todo pilihan-" . $pilihan . PHP_EOL;
            }else{
                echo "Gagal menghapus todo pilihan-" . $pilihan . PHP_EOL;
            }
        }
    }