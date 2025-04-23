<?php

namespace App\Controllers\AuthorsController;
use \PDO;

function indexAction(PDO $connexion) {
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion, 4);
   
    global $content, $title;
    $title = "Photographes";
    ob_start();
    include_once '../app/views/authors/index.php';
    $content = ob_get_clean();
}