<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo7</h1>
    <p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>
    <h2>Résultat</h2>
    <?php
        $age = 24;
        if($age > 18) {
            echo "L’enfant qui a $age ans appartient à la catégorie « Senior »";
        } else if ($age >= 12) {
            echo "L’enfant qui a $age ans appartient à la catégorie « Cadet»";
        } else if ($age >= 10) {
            echo "L’enfant qui a $age ans appartient à la catégorie « Minime»";
        } else if ($age >= 8) {
            echo "L’enfant qui a $age ans appartient à la catégorie « Pupille»";
        } else if ($age >= 6) {
            echo "L’enfant qui a $age ans appartient à la catégorie « Poussin»";
        } else {
            echo "L'enfant n'appartient à aucune catégorie";
        }  
    ?>
</body>
</html>