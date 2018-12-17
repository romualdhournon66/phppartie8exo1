<?php
$name ='Romuald';
$nameUserAgent= $_SERVER['HTTP_USER_AGENT'];
$nameRemote= $_SERVER['REMOTE_ADDR'];
$nameUserName= $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 8 exercice 1</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 8 exercice 1</h1>
                        <h3 align="center"></h3>
                        <p class="text">Exercice 1</p>
                        <p class="text">Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.</p>
                        <p class="text">Faire une page HTML permettant de donner à l'utilisateur :</p>
                        <ul>
                        <li>son User Agent</li>
                        <li>son adresse ip</li>
                        <li>le nom du serveur</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div align="center">
                <h2> Bonjour <?= $name ?> , Voici tes infos :</h2>
                <p align="center">Ton user agent est <b><?= $nameUserAgent ?></b></p>
                <p align="center">Ton adresse ip est <b><?= $nameRemote ?></b></p>
                <p align="center">Ton serveur est <b><?= $nameUserName ?></b></p>
            </div>
        </div>
    </body>
</html>

