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

        $requete = $database->prepare('SELECT * FROM tweet ORDER BY date DESC');
        $requete->execute();

        $tweets = $requete->fetchAll(PDO::FETCH_ASSOC);

        foreach($tweets as $tweet) { ?>

            <div>
                <h2><?php echo $tweet['title']; ?><h2>
                <p><?php echo $tweet['content']; ?><p>
                <span><?php echo $tweet['date']; ?></span>
                <a href="supprimer.php?id=<?php echo $tweet['id'];?>">Supprimer</a>
        </div>

        <?php

    }
        ?>
</body>
</html>