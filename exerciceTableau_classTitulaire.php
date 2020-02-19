<?php
    include "exerciceTableau_classCompte.php";

    class Titulaire
    {
        // ---- FIELDS ----

        private $_nom;
        private $_prenom;
        private $_dateDeNaissance;
        private $_ville;
        private $_comptes;

        // ---- CONSTRUCTORS ----

        public function __construct($nom, $prenom, $dateDeNaissance, $ville)
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateDeNaissance = new DateTime($dateDeNaissance); // TODO: No string check atm
            $this->_ville = $ville;
            $this->_comptes = [];
        }

        // ---- METHODS ----

        public function __toString()
        {
            $nbComptes = count($this->_comptes);
            $res = "<div style=\"background-color: #dedede; margin: 5px; padding: 1px 5px;>\"<label>AFFICHAGE CLIENT :</label>\n
                <p>[" . mb_strtoupper($this->_nom) . " $this->_prenom] "
                . $this->getAge() . ($this->getAge() > 1 ? " ans" : "an") . " possède $nbComptes " . ($nbComptes > 1 ? "comptes." : "compte.") . "</p>";
            if ($nbComptes > 0){
                $res .= "<p>Liste des comptes :</p>";
                foreach ($this->_comptes as $compte)
                    $res .= $compte;
            }
            return "$res</p></div>";
        }

        public function ajouterCompte($libelle, $devise){ // TODO: Check same _libelle
            $newCompte = new Compte($libelle, $devise, $this);
            if ($this->_comptes == null)
                $this->_comptes = [$newCompte];
            else
                array_push($this->_comptes, $newCompte);
        }

        public function getAge(){
            $now = new DateTime();
            return $now->diff($this->_dateDeNaissance)->y;
        }

        public function deposerSommeAuCompte($libelle, $somme){
            foreach ($this->_comptes as $compte) {
                if ($compte->getLibelle() == $libelle)
                {
                    $compte->deposerArgent($somme);
                    return;
                }
            }
        }

        public function retirerSommeAuCompte($libelle, $somme){
            foreach ($this->_comptes as $compte) {
                if ($compte->getLibelle() == $libelle)
                {
                    $compte->retirerArgent($somme);
                    return;
                }
            }
        }
        
        // ---- ACCESSORS ----

        public function getNom(){
            return $this->_nom;
        }

        public function getPrenom(){
            return $this->_prenom;
        }

        public function getDateDeNaissance(){
            return $this->_dateDeNaissance;
        }

        public function getVille(){
            return $this->_ville;
        }

        public function getComptes(){
            return $this->_comptes;
        }

        public function setNom($nom){
            $this->_nom = $nom;
        }

        public function setPrenom($prenom){
            $this->_prenom = $prenom;
        }

        public function setDateDeNaissance($dateDeNaissance){
            $this->_dateDeNaissance = new DateTime($dateDeNaissance); // TODO: No string check atm
        }

        public function setVille($ville){
            $this->_ville = $ville;
        }
    }
?>