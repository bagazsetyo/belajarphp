<?php

namespace Service{

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService{

        function showTodolist(): void;
        
        function addTodolist(string $todo): void;

        function remove(int $number): void;

    }

    class TodolistServiceImpl implements TodolistService{

        private TodolistRepository $toodlistRepository;

        public function __construct(TodolistRepository $toodlistRepository)
        {
            $this->toodlistRepository = $toodlistRepository;    
        }

        function showTodolist(): void
        {   
            echo "Todolistsssss" . PHP_EOL;

            foreach ($this->toodlistRepository->findAll() as $index => $value){
                echo "$index " . $value->getTodo() . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->toodlistRepository->save($todolist);
            echo "Sukses menambah todolist" . PHP_EOL;
        }

        function remove(int $number): void
        {
            if($this->toodlistRepository->remove($number)){
                echo "Sukses menghapus Todolis";
            }else{
                echo "Gagal menghapus Todolist";
            }
        }
    }

}