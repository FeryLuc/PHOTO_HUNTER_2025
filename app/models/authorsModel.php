<?php
namespace App\Models\AuthorsModel;
use \PDO;

function findAll(PDO $connexion):array {
    $sql = "SELECT * FROM authors ORDER BY created_at DESC LIMIT 2;";
    $rs = $connexion->query($sql);
    $authors = $rs->fetchAll(PDO::FETCH_ASSOC);
    return $authors;
}