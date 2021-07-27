<?php

    function validateLoginRequest(Login $request){

        if (!isset($request->username)) {
            throw new Validation("Username is null");
        }elseif (!isset($request->password)) {
            throw new Validation("Password is null");
        }elseif (trim($request->username) == '') {
            throw new Exception("Username is empty");
        }elseif (trim($request->password) == '') {
            throw new Exception("password is empty");
        }

    }