<?php
    class Compte
    {
        // ---- CONST ----

        const POUND = "£";
        const EURO = "€";
        const DOLLAR = "$";

        // ---- FIELDS ----

        private $_libelle;
        private $_solde;
        private $_devise;
        private $_titulaire;

        // ---- CONSTRUCTORS ----

        public function __construct(String $libelle, String $devise, Titulaire $titulaire)
        {
            $this->_libelle = $libelle;
            $this->_solde = 0;
            $this->_devise = $devise;
            $this->_titulaire = $titulaire;
        }

        // ---- METHODS ----

        public function __toString()
        {
            $moinsQue0 = $this->_solde < 0;
            $res = "<div style=\"background-color: " . ($moinsQue0 ? "#df5454" : "#ababab") . "; margin: 5px;\"><p>[" . strtoupper($this->_libelle) ."] appartient à "
                . mb_strtoupper($this->_titulaire->getNom()) . " " . $this->_titulaire->getPrenom() . "."
                . " Il contient $this->_solde $this->_devise.</p>"
                . ($moinsQue0 ? "<p><strong>Vous êtes dans le rouge !</strong></p>" : "");
            return "$res</div>";
        }

        public function deposerArgent($somme){
            $this->_solde += $somme;
        }

        public function retirerArgent($somme){
            $this->_solde -= $somme;
        }

        public function virementVers($compteACrediter, $valeur){
            self::virementEntre($this, $compteACrediter, $valeur);
        }

        // ---- STATIC METHODS ----

        public static function virementEntre($compteADebiter, $compteACrediter, $valeur){
            if ($compteADebiter->getSolde() < $valeur)
                return;
            $compteADebiter->retirerArgent($valeur);
            $compteACrediter->deposerArgent($valeur);
        }

        // ---- ACCESSORS ----

        public function getLibelle(){
            return $this->_libelle;
        }

        public function getSolde(){
            return $this->_solde;
        }

        public function getDevise(){
            return $this->_devise;
        }

        public function getTitulaire(){
            return $this->_titulaire;
        }

        public function setLibelle($libelle){
            $this->_libelle = $libelle;
        }

        public function setSolde($solde){
            $this->_solde = $solde;
        }

        public function setDevise($devise){
            $this->_devise = $devise;
        }

        public function setTitulaire($titulaire){
            $this->_titulaire = $titulaire;
        }
    }
?>