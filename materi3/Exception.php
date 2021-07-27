<?php

    require_once "Exeption/Validation.php";
    require_once "Data/Login.php";
    require_once "Helper/Validation.php";

    $login = new Login();
    $login->username = "Eko";
    $login->password = "";

    try{
        validateLoginRequest($login);
    }catch(Validation | Exception $exception){
        echo "Validation error : {$exception->getMessage()}" . PHP_EOL;
        var_dump($exception->getTrace());
    } finally {
        //error atau tidak tetap di eksekusi
        echo "Valid";
    }
