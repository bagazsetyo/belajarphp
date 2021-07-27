<?php

    require_once "Exeption/Validation.php";
    require_once "Data/Login.php";
    require_once "Helper/ValidationUtil.php";

    $request = new Login();
    $request->username = "eko";
    $request->password = "eko";
    ValidateUtil::validateReflection($request);

    class Register{
        public string $email;
    }

    $request = new Register();
    ValidateUtil::validateReflection($request);