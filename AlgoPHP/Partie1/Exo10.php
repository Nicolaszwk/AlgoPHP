<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo9</h1>
    <p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
       affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
       1 €.</p>
    <h2>Résultat</h2>
    <?php
    $montantAPayer = 100;
    echo "Montant à payer : $montantAPayer €<br>";
    $montantVerse = 358;
    echo "Montant versé : $montantVerse €<br>";
    $resteAPayer = $montantVerse - $montantAPayer;
    echo "Reste à payer : $resteAPayer €<br>";

    
    $billetDe10 = intdiv($resteAPayer, 10);
    $resteAPayer2 = $resteAPayer - ($billetDe10 * 10);
    $billetDe5 = intdiv($resteAPayer2,5);
    $resteAPayer3 = $resteAPayer2 - ($billetDe5 * 5);
    $pieceDe2 = intdiv($resteAPayer3, 2);
    $resteAPayer4 = $resteAPayer3 - ($billetDe5 * 2);
    $pieceDe1 = intdiv($resteAPayer4, 1);

    echo "Rendue de monnaie :<br>";
    echo "$billetDe10 billets de 10 € - $billetDe5 billet de 5 € - $pieceDe2 pièce de 2 € - $pieceDe1 pièce de 1 €"


    ?>
</body>
</html>