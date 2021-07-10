<?php

    /*
    menghapus todolist
    */

    function removetodolist(int $number):bool
    {
        global $todolist;

        if ($number > sizeof($todolist)) {
            return false;
        }

        for ($i=$number; $i < sizeof($todolist); $i++) { 
            $todolist[$i] = $todolist[$i+1];
        }

        unset($todolist[sizeof($todolist)]);


        //1. a
        //2. b (delete)
        //3. c

        //hasil
        //1. a
        //2. c

        return true;
    }