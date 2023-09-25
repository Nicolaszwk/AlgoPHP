<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo12</h1>
    <p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
       (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
       respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>
    <h2>Résultat</h2>
    <?php
        $tourist =  [
            "Mickaël" => "FRA",
            "Virgile" => "ESP",
            "Marie-Claire" => "ENG"
        ];

        ksort($tourist);

        foreach ($tourist as $prenom => $langue){
            if($langue == "FRA"){
                echo "Salut $prenom<br>";
            } else if ($langue == "ENG"){
                echo "Hello $prenom<br>";
            } else if ($langue == "ESP"){
                echo "Hola $prenom<br>";
            } else {
                echo "je ne comprends pas votre langue";
            }
        }

    ?>
</body>
</html>