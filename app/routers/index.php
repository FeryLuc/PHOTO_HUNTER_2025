<?php

//Route photos
if(isset($_GET['photos'])):
    include '../app/controllers/photosController.php';
    \App\Controllers\PhotosController\indexAction($connexion);
//Route par défaut
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;