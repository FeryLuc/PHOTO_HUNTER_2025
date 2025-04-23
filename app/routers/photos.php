<?php
include_once '../app/controllers/photosController.php';

switch($_GET['photos']):
    case 'show':
        \App\Controllers\PhotosController\showAction($connexion, $_GET['id']);
        break;
    default:
        \App\Controllers\PhotosController\indexAction($connexion);
        break;
endswitch;