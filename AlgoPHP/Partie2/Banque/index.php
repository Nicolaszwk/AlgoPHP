<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

include("comptes.php");
include("titulaire.php");

$compte1 = new compteBancaire ("Compte courant", 500, "€", "Nicolas Zwickel");
$compte2 = new compteBancaire ("Livret A", 350, "€", "Nicolas Zwickel");
$compte3 = new compteBancaire ("PEL", 1500, "€", "Nicolas Zwickel");

$titulaire = new titulaireCompte("Zwickel", "Nicolas", "1986/11/24", "Strasbourg");



$titulaire->ajoutComptes($compte1);
$titulaire->ajoutComptes($compte2);
$titulaire->ajoutComptes($compte3);

$titulaire->getInformations();
echo "<br>";
$compte1->getcomptesInformations();
echo "<br>";
$compte2->getcomptesInformations();
echo "<br>";
$compte3->getcomptesInformations();
echo "<br>";


echo "Le solde actuel du compte 1 est de: ".$compte1->getsoldeActuel(). " ".$compte1->getdevise(). "<br>" ;
echo "Le solde actuel du compte 2 est de: ".$compte2->getsoldeActuel(). " ".$compte2->getdevise(). "<br>". "<br>" ;
$compte1->transfert($compte2, 300);
echo "Le solde actuel du compte 1 est de: ".$compte1->getsoldeActuel(). " ".$compte1->getdevise(). "<br>";
echo "Le solde actuel du compte 2 est de: ".$compte2->getsoldeActuel(). " ".$compte2->getdevise(). "<br>";
?>
<body>
    
</body>
</html>