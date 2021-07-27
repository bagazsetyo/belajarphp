<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use Entity\Todolist;

function testShowTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Basic PHP");
    $todolistRepository->todolist[2] = new Todolist("Basic PHP2");
    $todolistRepository->todolist[3] = new Todolist("Basic PHP3");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}
function testAddTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajat PHP");
    $todolistService->addTodolist("Belajat PHP1");
    $todolistService->addTodolist("Belajat PHP2");

    $todolistService->showTodolist();
}

function testRemoveTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajat PHP");
    $todolistService->addTodolist("Belajat PHP1");
    $todolistService->addTodolist("Belajat PHP2");

    $todolistService->showTodolist();

    $todolistService->remove(1);

    $todolistService->showTodolist();
}

// testAddTodolist();
// testShowTodolist();
testRemoveTodolist();