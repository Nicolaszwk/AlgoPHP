<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo5</h1>
    <p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
       Attention, la valeur générée devra être arrondie à 2 décimales.</p>
    <h2>Résultat</h2>
    <?php
        $entier = 100;
        $conversionEuro = $entier / 6.55957;
        echo "Montant en francs : $entier<br>";
        $valeurArrondi = round ($conversionEuro, 2);
        echo "100 francs = $valeurArrondi €";
    ?>
</body>
</html>