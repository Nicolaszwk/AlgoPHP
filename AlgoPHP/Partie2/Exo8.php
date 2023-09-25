<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 8</h1>
    <p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
       Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
       Exemple :
       repeterImage($url,4);</p>
    <h2>Résultat</h2>
    <?php
        function repeterImage($url, $n) {
            for($i = 1; $i <= $n; $i++){
                echo "<img src='$url'>";
            }
        }
        $url = "http://my.mobirise.com/data/userpic/764.jpg";
        echo repeterImage($url,4);


        


    ?>

</body>
</html>