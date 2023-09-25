<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo9</h1>
    <p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en
       paramètre ("Monsieur","Madame","Mademoiselle").</p>
    <h2>Résultat</h2>
    <?php
        $nomsRadio= array("Monsieur","Madame","Mademoiselle");
        function afficherRadio($nomsRadio){
            foreach ($nomsRadio as $genre){
                if ($genre=="Mademoiselle"){
                  echo "<input type='radio' id='genre' checked>Autre<br>";
                } else {
                    echo "<input type='radio' id='genre'>$genre<br>";

                }
            }
        }
        echo afficherRadio($nomsRadio)
    ?>
    

</body>
</html>