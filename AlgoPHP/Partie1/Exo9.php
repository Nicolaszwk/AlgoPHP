<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo9</h1>
    <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
       Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
       plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
    </p>
    <h2>Résultat</h2>
    <?php
    $age = 21;
    echo "Age : $age<br>";
    $sex = "homme";
    echo "Sexe : $sex<br>";
    $boleanWomen = ($sex == "femme" && $age >= 18 && $age <= 35);
    $boleanMen = ($sex == "homme" && $age > 20);

    if ($boleanWomen || $boleanMen){
        echo "La personne est imposable";
    } else {
        echo "La personne n'est pas imposable";
    }
    

    ?>
</body>
</html>