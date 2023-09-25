<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo15</h1>
    <p>Créer une classe Personne (nom, prénom et date de naissance). <br>
       Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>
    <h2>Résultat</h2>
    <?php



//Création de la classe

Class Personne {

    private string $nom;
    private string $prenom;
    private Datetime $dateDeNaissance;

//Initialisation de l'objet que l'on va créer
    public function __construct(string $nom , string $prenom, string $dateDeNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new Datetime($dateDeNaissance);
    }

// Getter. Récupération de l'une des valeurs de l'objet (ici nom)
    public function getNom() {
        return $this->prenom;
    }

//Setter. Modification de l'une des valeurs de l'objet (ici nom)
    public function setNom ($nom){
        $this->nom = $nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom ($prenom){
        $this->prenom = $prenom;
    }
    public function getDateDeNaissance() {
        return $this->dateDeNaissance;
    }
    public function setDateDeNaissance ($dateDeNaissance){
        $this->dateDeNaissance = $dateDeNaissance;
    }

//Fonction de calcul de l'age (différence entre date de naissance la personne et la date actuelle)
    public function calculAge() {
        $dateActuelle = new DateTime();
        $diff=date_diff($this->dateDeNaissance,$dateActuelle);
        return $age = $diff->format("%Y ans");
    }

    public function __toString() {
        return "Nom: ". $this->nom. " Prenom: ". $this->prenom.  " Date de naissance: ". $this->calculAge();
    }

}
//Instanciation 

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
// echo $p1->getNom();
// echo "<br>";
// echo $p1->getPrenom();
// echo "<br>";
// echo $p1->calculAge();
// echo "<hr>";

// echo $p2->getNom();
// echo "<br>";
// echo $p2->getPrenom();
// echo "<br>";
// echo $p2->calculAge();


echo $p1;
echo "<hr>";
echo $p2;





    
    ?>
</body>
</html>