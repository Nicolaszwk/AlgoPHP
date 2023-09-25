<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>Soit la phrase «Notre formation DL commence aujourd'hui».</br>
       Ecrire un algorithme permettant de compter le nombre de caractèrescontenus dans cette phrase (espaces inclus).</p>
    <h2>Résultat</h2>
    <?php
    $phraseExo1 = "Notre formation DL commence aujourd'hui";
    $nbCaracteres = strlen($phraseExo1);
    echo "La phrase contient $nbCaracteres caractères<br>";
    ?>

</body>
</html>