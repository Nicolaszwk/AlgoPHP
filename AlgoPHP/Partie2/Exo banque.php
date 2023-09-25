<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class compteBancaire {
    private string $nomCompte;
    private float $soldeInitial;
    private string $devise;
    private string $titulaireCompte;
    private float $soldeActuel;

    public function __construct(string $nomCompte , float $soldeInitial, string $devise, string $titulaireCompte) {
        $this->nomCompte = $nomCompte;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;
        $this->titulaireCompte = $titulaireCompte;

        // Le solde Actuel correpond tout d'abord au solde initial avant de subir des modifications (ajout/retrait d'argent)
        $this->soldeActuel = $soldeInitial;
    }

    public function getNomCompte() {
        return $this->nomCompte;
    }
    public function setNomCompte($nomCompte){
        $this->nomCompte = $nomCompte;
    }
    public function getSoldeInitial() {
        return $this->soldeInitial;
    }
    public function setSoldeInitial($SoldeInitial){
        $this->SoldeInitial = $SoldeInitial;
    }
    public function getDevise() {
        return $this->devise;
    }
    public function setDevise($devise){
        $this->devise = $devise;
    }
    public function gettitulaireCompte() {
        return $this->titulaireCompte;
    }
    public function settitulaireCompte($titulaireCompte){
        $this->titulaireCompte = $titulaireCompte;
    }
    public function getsoldeActuel() {
        return $this->soldeActuel;
    }
    public function setsoldeActuel($soldeActuel){
        $this->soldeActuel = $soldeActuel;
    }


    // fonction pour ajouter de l'argent sur le compte
    public function crediter($ajout){
        if ($ajout > 0){
            $this->soldeActuel += $ajout;
            echo "Le montant actuel du compte est de: ". $this->getsoldeActuel(). " ". $this->getdevise();
        } else {
            echo "Le montant ajouté doit être supérieur à 0";
        }
    }

    // Fonction pour retirer(debiter) de l'argent du compte
    public function debiter($debit){
        if ($debit > 0){
            $this->soldeActuel -= $debit;
            echo "Le montant actuel du compte est de: ". $this->getsoldeActuel(). " ". $this->getdevise();
        } else {
            echo "Le montant debité doit être supérieur à 0";
        }
    }

    // Fonction pour transferer de l'argent d'un compte à un autre
    public function transfert (compteBancaire $destinataire, $montant){
        if ($montant < 0){
            echo "Le montant du transfert doit être supérieur à 0";
        }
        elseif ($montant > $this->soldeActuel){
            echo "Fonds insuffisants";
        } else{

        $this->soldeActuel -= $montant;
        $destinataire->soldeActuel += $montant;

        echo "Transfert de ".$montant." ".$this->devise. "<br>". "<br>";
        }
    }

    // Fonction qui permet d'afficher les informations liés à un compte
    public function getcomptesInformations(){
        echo    "Nom du compte: ". $this->nomCompte. "<br>".
                "Titulaire du compte: ". $this->titulaireCompte. "<br>".
                "Montant: ". $this->soldeActuel. " ". $this->devise. "<br>";
    }
}

class titulaireCompte {
    private string $nomTitulaire;
    private string $prenomTitulaire;
    private string $dateNaissance;
    private string $age;
    private string $ville;
    private array $comptesBancaires;


    public function __construct(string $nomTitulaire, string $prenomTitulaire, string $dateNaissance, string $ville){
        $this->nomTitulaire = $nomTitulaire;
        $this->prenomTitulaire = $prenomTitulaire;
        $this->dateNaissance = $dateNaissance;
        $this->age = $this->calculAge();
        $this->ville = $ville;
        $this->comptesBancaires = array();
    }

    public function getNomTitulaire() {
        return $this->nomTitulaire;
    }
    public function setNomTitulaire($nomTitulaire){
        $this->nomTitulaire = $nomTitulaire;
    }
    public function getPrenomTitulaire() {
        return $this->prenomTitulaire;
    }
    public function setPrenomTitulaire($prenomTitulaire){
        $this->prenomTitulaire = $prenomTitulaire;
    }
    public function getDateNaissance() {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }
    public function getVille() {
        return $this->ville;
    }
    public function setVille($ville){
        $this->ville = $ville;
    }

    // Fonction qui permet d'ajouter un compte à un array
    public function ajoutComptes(compteBancaire $compte) {
        $this->comptesBancaires[] = $compte;
    }

    // Fonction pour calculer l'age par rapport à une date de naissance
    public function calculAge(){
        $dateDeNaissance = new DateTime($this->dateNaissance);
        $dateActuelle = new DateTime();
        $diff=date_diff($dateDeNaissance,$dateActuelle);
        return $diff->format("%Y");
    }

    // Fonction pour afficher les informations du titulaire du compte ainsi que ses différents comptes bancaires
    public function getInformations() {
        echo    "Nom: ". $this->nomTitulaire. "<br>".
                "Prenom: ". $this->prenomTitulaire. "<br>".
                "Age: ". $this->age. " ans". "<br>".
                "Ville: ". $this->ville. "<br>";

        // Pour chaque compte, affiche le nom du compte
        foreach ($this->comptesBancaires as $compte) {
            echo "Nom du compte : " . $compte->getNomCompte() . "<br>";
}
    }}

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
</body> 
</html>