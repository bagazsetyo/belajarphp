<?php

function Hellow(mixed $data): mixed
{
    if (is_array($data)){
        return [];
    }elseif(is_string($data)){
        return 'string';
    }elseif(is_int($data)){
        return 1;
    }else{
        return '0';
    }
}

var_dump(Hellow(1));