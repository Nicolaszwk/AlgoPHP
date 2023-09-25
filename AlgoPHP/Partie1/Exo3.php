<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo3</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>
    <h2>Résultat</h2>
    <?php
        $chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
        echo $chaineDeCaracteres."<br>";
        echo str_replace("aujourd'hui", "demain", $chaineDeCaracteres);
    ?>
</body>
</html>