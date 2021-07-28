<?php

namespace View{

use Service\TodolistService;
use Helper\InputHelpers;

class TodolistView{

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist():void
        {
            while (true) {
                $this->todolistService->showTodolist();
    
                echo "Menu " . PHP_EOL;
                echo "1 Tambah Todo " . PHP_EOL;
                echo "2 Hapus Todo " . PHP_EOL;
                echo "0 keluar Todo " . PHP_EOL;
    
                $pilih = InputHelpers::input("Pilih");
    
                if ($pilih == 1) {
                    $this->addTodolist();
                }elseif ($pilih == 2) {
                    $this->removeTodolist();
                }elseif ($pilih == 0) {
                    break;
                }else{
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
    
    
            echo "Selamat Tinggal";
        }
        function addTodolist():void
        {
            echo "Menambah Todolist " . PHP_EOL;

            $todo = InputHelpers::input("Todo (3) untuk batal");

            if($todo == 3){
                echo "Batal Menambah todo";
            }else{
                $this->todolistService->addTodolist($todo);
            }
        }
        function removeTodolist():void
        {
            
            echo "Menghapus Todolist " . PHP_EOL;

            $pilihan = InputHelpers::input("Todo (3) untuk batal");

            if($pilihan == 0){
                echo "Batal menghapus todo";
            }else{
                
                $this->todolistService->remove($pilihan);

            }
        }

    }

}