<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once 'navbar.php';
    ?>
<?php
        require_once 'connexion.php';

        $requete = $database->prepare('SELECT * FROM users ORDER BY id DESC');
        $requete->execute();

        $users = $requete->fetchAll(PDO::FETCH_ASSOC);

        foreach($users as $user) { ?>

            <div>
                <h2><?php echo $user['pseudo']; ?><h2>
                <p><?php echo $user['name']; ?><p>
                <span><?php echo $user['mail']; ?></span>
                <br>
                <img src="<?php echo $user['profil']; ?>">
                <br>
                <a href="supprimer.php?id=<?php echo $user['id'];?>">Supprimer</a>
        </div>

        <?php

    }
        ?>
</body>
</html>