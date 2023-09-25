<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo13</h1>
    <p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
       coefficient). Elle devra être affichée avec 2 décimales.
</p>
    <h2>Résultat</h2>
    <?php
    $array = array(10, 12, 8 ,19, 3, 16, 11, 13, 9);
    echo "Les notes obtenues par l’élève sont : ".implode(", ", $array)."<br>";
    $sum = array_sum($array) / count($array);
    $average = round($sum, 2);

    // $moyenne = round(array_sum($array) / count($array), 2);

    echo "Sa moyenne générale est donc de : $average";



    ?>
</body>
</html>