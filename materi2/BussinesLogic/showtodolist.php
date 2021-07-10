<?php

    /*
    Menampilkan todolist
    */

    function showtodolist(){
        global $todolist;

        echo "Todolist" . PHP_EOL;

        foreach ($todolist as $index => $value){
            echo "$index $value" . PHP_EOL;
        }
    }