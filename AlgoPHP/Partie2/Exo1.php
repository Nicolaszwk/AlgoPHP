<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 1</h1>
    <p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
       caractère passée en argument en majuscules et en rouge.
       Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
    <h2>Résultat</h2>

    <?php

        
        function convertirMajRouge($text){
            $majuscule = strtoupper($text);
            return "<b style='color: red;'>$majuscule</b>";
             
        }

        echo convertirMajRouge("Jaime les brownies")

    
    ?>
</body>
</html>