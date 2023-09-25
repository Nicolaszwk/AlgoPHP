<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo4</h1>
    <p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
    <h2>Résultat</h2>
    <?php
        $chaineDeCaracteres = "Engage le jeu que je le gagne";
        $palindrome = strtolower($chaineDeCaracteres);
        $palidromeSansEspace = str_replace(" ", "", $palindrome);
        $palindromeReversed = strrev($palidromeSansEspace);
        if ($palidromeSansEspace == $palindromeReversed){
            echo "La phrase est un palindrome";
        } else {
            echo "La phrase n'est pas un palindrome";
        }

    ?>
</body>
</html>