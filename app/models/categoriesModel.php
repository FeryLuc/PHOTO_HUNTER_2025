<?php
namespace App\Models\CategoriesModel;
use \PDO;

function findAll(PDO $connexion):array {
    $sql = "SELECT *
            FROM categories
            ORDER BY created_at ASC;";
    $rs = $connexion->query($sql);
    $photos = $rs->fetchAll(PDO::FETCH_ASSOC);
    return $photos;
}