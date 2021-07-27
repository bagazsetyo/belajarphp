<?php

    require_once "Data/Student.php";

    $student1 = new Student();
    $student1->id = 1;
    $student1->name = "bagas";
    $student1->value = 100;

    var_dump($student1);

    $student2 = clone $student1;

    var_dump($student2);