<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo14</h1>
    <p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
    <h2>Résultat</h2>
    <?php
        $dateDeNaissance = new DateTime("1986-11-24");
    // new DateTime() sans rien dans les parenthèses, ça considère la date du jour//
        $dateActuelle = new DateTime();
        $diff=date_diff($dateDeNaissance,$dateActuelle);

        echo "Age de la personne: ".$diff->format("%Y ans %m mois %d jours");
    ?>
</body>
</html>