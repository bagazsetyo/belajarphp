<?php

require_once __DIR__ . '/getConnetion.php';
require_once __DIR__ . '/model/Comment.php';
require_once __DIR__ . '/repository/CommentRepository.php';

use Models\Comment;
use Repository\CommentRepositoryImpl;

$connection = getConnection();

$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "repository@tes.com", comment: "hi");

// $newcomment = $repository->inset($comment);
// var_dump($newcomment->getid());

// $comment = $repository->findById(4);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;