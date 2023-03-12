<?php
    require_once 'connexion.php';

    if($_POST['pseudo'] != "" && $_POST['password'] != "" && $_POST['name'] != "" && $_POST['mail']) {
        $data = [
            'pseudo' => $_POST['pseudo'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'name' => $_POST['name'],
            'mail' => $_POST['mail'],
            'profil' => $_POST['profil']
        ];

        $requete = $database->prepare('INSERT INTO users (pseudo, password, name, mail, profil) VALUES (:pseudo, :password, :name, :mail, :profil)');
        $requete->execute($data);
        
        if($requete) {
            header('Location: ../index.php');
        }
        else
        {
            echo 'Une erreur est survenue';
        }

    } else {
        echo 'Veillez remplir tous les champs.';
    }
?>