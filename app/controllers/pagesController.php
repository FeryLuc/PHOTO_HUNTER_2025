<?php

namespace App\Controllers\PagesController;
use \PDO;

function homeAction(PDO $connexion) {
    include_once '../app/models/photosModel.php';
    $photos = \App\Models\PhotosModel\findAll($connexion, 3);
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion, 2);

    global $content, $title;
    $title = "HomePage";
    ob_start();
    include_once '../app/views/pages/home.php';
    $content = ob_get_clean();
}