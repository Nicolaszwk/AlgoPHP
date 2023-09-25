<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 7</h1>
    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
       dans le tableau associatif si la case est cochée ou non.
       Exemple :
       genererCheckbox($elements);
       //où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>
    <h2>Resultat</h2>
    
    <?php
    $verification = array ("Choix 1"=>"Non","Choix 2"=>"Oui","Choix 3"=>"Non");
        function choixMultiple ($verification){
        foreach ($verification  as $choix=>$checked){
            if ($checked=="Oui"){
                
                echo "<input type='checkbox' checked />$choix<br>";
           }else {
                echo "<input type='checkbox'/>$choix<br>";
           }
        }
    }
        echo choixMultiple ($verification);



    ?>
</body>
</html>