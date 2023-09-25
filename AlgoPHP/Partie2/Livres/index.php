<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class livres {
        private string $titre;
        private string $nbPages;
        private string $annee;
        private string $prix;
        private string $auteur;
        private array $bibliographie

        public function __construct(string $titre , string $nbPages, string $annee, string $prix, string $auteur) {

            $this->titre = $titre;
            $this->nbPages = $nbPages;
            $this->annee = $annee;
            $this->prix = $prix;
            $this->auteur= $auteur;
            $this->bibliographie = array();

            public function getTitre() {
                return $this->titre;
            }
            public function setTitre($titre){
                $this->titre = $titre;
            }
            public function getNbPages() {
                return $this->nbPages;
            }
            public function setNbPages($nbPages){
                $this->nbPages = $nbPages;
            }
            public function getAnnee() {
                return $this->annee;
            }
            public function setAnnee($annee){
                $this->annee = $annee;
            }
            public function getPrix() {
                return $this->prix;
            }
            public function setPrix($prix){
                $this->prix = $prix;
            }
            public function getAuteur() {
                return $this->auteur;
            }
            public function setAuteur($auteur){
                $this->prix = $auteur;
            }
            
            //Ajouter un livre à l'array
            public function ajoutLivre(bibliographie $reference) {
                    $this->bibliographie[] = $reference;
            }

            //Afficher la bibliographie
             public function afficherBibliographie(){
                echo    $this->auteur. "<br>". "<br>".
                        foreach ($this->bibliographie as $reference){
                            echo $reference->getTitre(). " ".
                            "(". $reference->getAnnee(). ") :"
                            $reference->getNbPages(). " pages".
                            " / ". $reference->getPrix(). " €";
                        }

            }
        }
    }

$livre1 = new livres("Ca", "1138", "1986", "20", "Stephen King" )
$livre2 = new livres("Simetierre", "374", "1983", "15", "Stephen King" )
$livre3 = new livres("Le fleau", "823", "1978", "14", "Stephen King" )
$livre4 = new livres("Shining", "447", "1977", "16", "Stephen King" )



$livres->ajoutLivre($livre1)
$livres->ajoutLivre($livre2)
$livres->ajoutLivre($livre3)
$livres->ajoutLivre($livre4)

$livre->afficherBibliographie()






    ?>
</body>
</html>