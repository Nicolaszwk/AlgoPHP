<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 13</h1>
    <p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
       vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs 
       (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. 
       Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
       v1 ➔ "Peugeot","408",5
       v2 ➔ "Citroën","C4",3
       Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests
       pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments suivants
       :
    </p>
    <h2>Résultat</h2>
    <?php
    class Voiture {

        private string $marque;
        private string $modele;
        private int $nbPortes;
        private int $vitesseActuelle;
        private bool $isDemarree;

        public function __construct(string $marque , string $modele, int $nbPortes) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;

            $this->vitesseActuelle = 0;
            $this->isDemarree = false;
        }

        public function getMarque() {
            return $this->marque;
        }
        public function setMarque($marque){
            $this->marque = $marque;
        }
        public function getModele() {
            return $this->modele;
        }
        public function setModele($modele){
            $this->modele = $modele;
        }
        public function getNbPortes() {
            return $this->nbPortes;
        }
        public function setNbPortes($nbPortes){
            $this->nbPortes = $nbPortes;
        }
        public function getVitesseActuelle() {
            return $this->vitesseActuelle;
        }
        // public function setVitesseActuelle($vitesseActuelle){
        //     $this->vitesseActuelle = $vitesseActuelle;
        // }

        public function demarrer(){
            if (!$this->isDemarree){
                $this->isDemarree = true;
                echo "Le véhicule ". $this->getNomComplet(). " démarre";
            } else {
                echo "Le véhicule ". $this->getNomComplet(). " est déjà démarré !";
            }
        }

        public function stopper(){
            if ($this->isDemarree){
                echo "Le véhicule ". $this->getNomComplet(). " est stoppé". "<br>";
            }
        }

        public function accelerer($deltaVitesse){
            if ($this->isDemarree){
                if ($deltaVitesse > 0) {
                    $this->vitesseActuelle += $deltaVitesse;
                    echo "Le véhicule ". $this->getNomComplet(). " accélère de ". $deltaVitesse. " km/h";
                } else {
                    echo "Le véhicule ". $this->getNomComplet(). " ne peut pas accélérer d'une vitesse négative ou nulle !";
                }
            }     else {
                echo "Pour accélerer, il faut démarrer le véhicule  ". $this->getNomComplet(). " !";
            }
        }

        public function ralentir ($deltaVitesse){
            if ($this->isDemarree){
                if ($deltaVitesse > 0) {
                    $this->vitesseActuelle -= $deltaVitesse;
                    echo "Le véhicule ". $this->getNomComplet(). " décélère de ". $deltaVitesse. " km/h";
                } else {
                    echo "Le véhicule ". $this->getNomComplet(). " ne peut pas décélérer d'une vitesse négative ou nulle !";
                }
            }
        }

        public function getNomComplet() {
            return $this->marque. " ". $this->modele;
        }

        public function __toString() {
            // return $this->demarrer($this->getVitesseActuelle()). "<br>".
            //        $this->stopper($this->getVitesseActuelle()).
            //        $this->accelerer ($this->getVitesseActuelle());
            return "";
        }
    }

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 3);

$v1->demarrer();
$v1->accelerer(50);
$v1->ralentir(20);






    ?>
</body>
</html>


