<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 15</h1>
    <p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
       adresse e-mail a le bon format.</p>
    <h2>Résultat</h2>
    <?php
        $email = "elan@elan-formation.fr";
    
        // Filter_var filters a variable with a specified filter (ici FILTER_VALIDATE_EMAIL)

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse $email est une adresse email valide";
        } else {
            echo "L'adresse $email n'est pas valide";
        }
?> 
</body>
</html>