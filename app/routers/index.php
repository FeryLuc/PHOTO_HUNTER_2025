<?php

//Route authors
if(isset($_GET['authors'])):
    include '../app/routers/authors.php';
//Route photos
elseif(isset($_GET['photos'])):
    include '../app/routers/photos.php';
//Route par défaut
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;