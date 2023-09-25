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

?>