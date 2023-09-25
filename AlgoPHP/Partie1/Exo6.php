<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo6</h1>
    <p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
    <h2>Résultat</h2>
    <?php
        $article = 9.99;
        echo "Prix unitaire de l’article : $article €<br>";
        $quantity = 5;
        echo "Quantité : $quantity<br>";
        $tva = 0.2;
        echo "Taux de TVA : $tva<br>";
        $montantTotal = $article * $quantity + ($article * $quantity *$tva);
        echo "Le montant de la facture à régler est de : $montantTotal €";



    ?>
</body>
</html>