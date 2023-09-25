<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo11</h1>
    <p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
       tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
       d’afficher le nombre de marques de voitures présentes dans le tablea</p>
    <h2>Résultat</h2>
    <?php
        $voitures =  array("Peugeot", "Renault", "BMW", "Mercedes" );
        $compterVoiture = count($voitures);

        echo "Il y a $compterVoiture marques de voitures dans le tableau :<ul>";
        foreach ($voitures as $voitures){
            echo "<li>$voitures</li>";
        }

        echo "</ul>";

    ?>
</body>
</html>