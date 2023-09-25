<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo6</h1>
    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
       de valeurs.
       Exemple :
       $elements = array("Monsieur","Madame","Mademoiselle");
       alimenterListeDeroulante($elements);</p>
    <h2>Resultat</h2>

    
    
    <?php
        $elements = array("Monsieur","Madame","Mademoiselle");

       function alimenterListeDeroulante($elements) {
        foreach ($elements as $genre){
           echo "<option value='genre'>$genre</option>";

        }
       }

       echo alimenterListeDeroulante($elements);
       echo "<form><select>alimenterListeDeroulante($elements)</select></form>";
    ?>
    
</body>
</html>