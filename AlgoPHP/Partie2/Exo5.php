<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 5</h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
       précisant le nom des champs associés.
       Exemple :
       $nomsInput = array("Nom","Prénom","Ville");
       afficherInput($nomsInput);</p>
    <h2>Résultat</h2>
    
    <?php
        $nomsInput = array("Nom","Prénom","Ville");
        
        function formulaire ($nomsInput){
            foreach ($nomsInput as $form){
            echo "<label for='nom'>$form</label><br><input type='text'><br>";
        }
    }
        echo formulaire ($nomsInput)
    ?>
</body>
</html>