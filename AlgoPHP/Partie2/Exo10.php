<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 10</h1>
    <p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui
       contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et
       une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur 
       Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
       Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>
    <h2>Résultat</h2>
    <?php 
      $nomsInput = array("Nom","Prénom","Adresse e-mail", "Ville", "Sexe");
        
      function formulaire ($nomsInput){
          foreach ($nomsInput as $form){
          echo "<label for='nom'>$form</label><br><input type='text'><br>";
      }
      echo "<br>Formation:<br>";
    }
      $formation = array ("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");
        function choixMultiple ($formation){
        foreach ($formation as $metier){
            echo "<input type='checkbox' />$metier<br>";
           }
        }
    echo formulaire ($nomsInput);
    echo choixMultiple ($formation);
    echo "<br><input type='submit' Value='Soumettre'>"
    ?>


</body>
</html>