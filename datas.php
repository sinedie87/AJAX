<?php

include "utilities/pdo.php";

/* Récupére les informations de la TABLE contents */

$query_contents = $pdo->prepare('SELECT * 
                                FROM contents');

$query_contents->execute();

$contents = $query_contents->fetchAll( PDO::FETCH_ASSOC );

// var_dump($contents);
$encoded_datas = json_encode($contents);
// var_dump($encoded_datas);

echo $encoded_datas;

?>