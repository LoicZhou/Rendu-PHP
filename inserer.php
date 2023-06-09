<?php

require_once 'connexion.php';

if($_POST['title'] != '' && $_POST['content'] != "") {
    
    $data = [

        'title' => $_POST['title'],

        'content' => $_POST['content'],

        'date' => date('Y-m-d H:i:s')
    ];

    $requete = $database->prepare('INSERT INTO tweet (title, content, date) VALUES (:title, :content, :date)');
    $requete->execute($data);

if($requete) {
    header('Location: index.php');
}
else {
    echo 'Une erreur est survenue.';
}
}
else {
    echo 'Veuillez remplir tous les champs.';
}

?>