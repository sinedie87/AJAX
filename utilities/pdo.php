<?php
/* FICHIER POUR CONNEXION PDO */

/* Connexion à la BDD */
$pdo = new PDO('mysql:host=localhost;dbname=Sommaire',
                'root',
                'root');

$pdo->exec('SET NAMES UTF8');

?>