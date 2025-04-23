<?php
include_once '../app/controllers/authorsController.php';

switch($_GET['authors']):
    case 'show':
        \App\Controllers\AuthorsController\showAction($connexion, $_GET['id']);
        break;
    default:
        \App\Controllers\AuthorsController\indexAction($connexion);
        break;
endswitch;