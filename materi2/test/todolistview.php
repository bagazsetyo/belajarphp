<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";
require_once __DIR__ . "/../view/TodolistView.php";
require_once __DIR__ . "/../helper/InputHelper.php";

use \entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \view\TodolistView;

function testViewShowTodolist():void 
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar");
    $todolistService->addTodolist("Berkebun");
    $todolistService->addTodolist("Belanja");

    $todolistView->showTodolist();
}

function testViewAddTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajat PHP");
    $todolistService->addTodolist("Belajat PHP1");
    $todolistService->addTodolist("Belajat PHP2");

    $todolistService->showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
}

function testViewRevmoceTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajat PHP");
    $todolistService->addTodolist("Belajat PHP1");
    $todolistService->addTodolist("Belajat PHP2");

    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
}

// testViewShowTodolist();
// testViewAddTodolist();
testViewRevmoceTodolist();