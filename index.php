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

<h1>Page d'accueil :<h1>

<form action="rechercher.php" method="GET">
        <input type="text" name="recherche" id="recherche">
        <input type="submit" value="Rechercher">
</form>
<form action="inserer.php" method="POST">
        <label for="title">Titre : </label>
        <input type="text" name="title" id="title">

        <label for="content">Contenu : </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <input type="submit" value="Envoyer">
</form>

</body>
</html>