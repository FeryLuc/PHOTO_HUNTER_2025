<?php

//Route authors
if(isset($_GET['authors'])):
    include '../app/controllers/authorsController.php';
    \App\Controllers\AuthorsController\indexAction($connexion);
//Route photos
elseif(isset($_GET['photos'])):
    include '../app/controllers/photosController.php';
    \App\Controllers\PhotosController\indexAction($connexion);
//Route par défaut
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;