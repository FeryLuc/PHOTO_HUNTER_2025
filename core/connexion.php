<?php
try {
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
} catch (\Throwable $e) {
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
}
