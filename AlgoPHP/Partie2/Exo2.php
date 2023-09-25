<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 2</h1>
    <p>Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>
    <h2>Résultat</h2>
    
    <?php
        $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
        

        function afficherTableHTML($capitales) {
            ksort($capitales);
            foreach ($capitales as $pays => $villes){
            $majuscule = ucfirst($pays);
            echo "Pays: $majuscule"." Ville: $villes";
            
    }
}
        echo afficherTableHTML($capitales); 
    ?>


//ou boucle for//
<style>
    table, th, td {
    border: 1px solid black;
}
</style>
    <table>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>