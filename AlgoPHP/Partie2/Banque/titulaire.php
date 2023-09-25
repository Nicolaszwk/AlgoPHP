<?php

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

    ?>