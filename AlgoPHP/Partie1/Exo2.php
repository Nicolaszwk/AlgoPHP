<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo2</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.</p>
    <h2>Resultat</h2>
    <?php
        $chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
        $nbMots = str_word_count($chaineDeCaracteres);
        echo "La phrase contient $nbMots mots<br>"  
    ?>
</body>
</html>