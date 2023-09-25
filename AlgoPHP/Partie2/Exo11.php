<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 11</h1>
    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
       chaîne de caractère représentant une date.
       Exemple : formaterDateFr("2018-02-23");</p>
    <h2>Résultat</h2>
    <?php
    function formaterDateFr($date){
        $fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN);
        echo $fmt->format(strtotime($date));
    }
    echo formaterDateFr("1986-11-24");
    ?>
</body>
</html>

<?php

