<?php
    include "part2_allFunctions.php";

    $v1 = new Voiture("Peugeot", "408", 5);
    echo $v1;

    class Voiture
    {
        // ---- FIELDS ----

        private $_marque;
        private $_modele;
        private $_nbPortes;
        private $_vitesseActuelle;

        // ---- CONTRUCTORS ----

        public function __construct($marque, $modele, $nbPortes)
        {
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = 0;
        }
        
        public function __toString()
        {
            return "<p>Nom et modèle du véhicule : $this->_marque $this->_modele</p>\n
                <p>Nombre de portes : $this->_nbPortes</p>";
        }

        // ---- METHODS ----

        public function demarrer(){
            return "Le véhicule $this->_modele est démarré";
        }

        public function accelerer(){
            $this->_vitesseActuelle += 30;
        }

        public function ralentir(){
            if ($this->_vitesseActuelle == 0)
                return;
            $this->_vitesseActuelle -= 30;
        }

        public function stopper(){
            $this->_vitesseActuelle = 0;
        }

        // ---- ACCESSORS ----

        public function getMarque(){
            return $this->_marque;
        }
        
        public function getModele(){
            return $this->_modele;
        }

        public function getNbPortes(){
            return $this->_nbPortes;
        }

        public function getVitesseActuelle(){
            return $this->_vitesseActuelle;   
        }

        public function setMarque($marque){
            $this->_marque = $marque;
        }

        public function setModele($modele){
            $this->_modele = $modele;
        }

        public function setNbPortes($nbPortes){
            $this->_nbPortes = $nbPortes;
        }

        public function setVitesseActuelle($vitesseActuelle){
            $this->_vitesseActuelle = $vitesseActuelle;
        }
    }
?>