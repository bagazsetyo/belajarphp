<?php

class ValidateUtil{
    function validate(Login $request){

        if (!isset($request->username)) {
            throw new Validation("Username is null");
        }elseif (!isset($request->password)) {
            throw new Validation("Password is null");
        }

    }

    static function validateReflection($request){
        $reflextion = new ReflectionClass($request);
        $properties = $reflextion->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $key => $value) {
            if (!$value->isInitialized($request)) {
                throw new Validation("$value->name is not set");
            }elseif(is_null($value->getValue($request))){
                throw new Validation("$value->name is not null");
            }
        }
    }
}
    