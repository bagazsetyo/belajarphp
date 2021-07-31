<?php 

    require_once __DIR__ . '/vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $log = new Logger("ProgrammerZamanNow");
    $log->pushHandler(new StreamHandler('aplication.log', Logger::INFO));


    $log->info('hellow world');
    $log->info('selemat belajar');