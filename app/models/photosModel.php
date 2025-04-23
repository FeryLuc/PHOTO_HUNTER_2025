<?php
namespace App\Models\PhotosModel;
use \PDO;

function findAll(PDO $connexion):array {
    $sql = "SELECT *, p.id AS photoId, a.id AS authorId
            FROM photos p 
            JOIN authors a ON p.author_id = a.id 
            ORDER BY p.created_at DESC 
            LIMIT 3;";
    $rs = $connexion->query($sql);
    $photos = $rs->fetchAll(PDO::FETCH_ASSOC);
    return $photos;
}