<?php
    include "part2_14_classVoiture.php";

    class VoitureElec extends Voiture
    {
        // ---- FIELDS ----

        private $_autonomie;

        // ---- CONTRUCTORS ----

        public function __construct($marque, $modele, $autonomie)
        {
            parent::__construct($marque, $modele);
            $this->_autonomie = $autonomie;
        }
        
        public function __toString()
        {
            return "<div style=\"background-color: #dedede\">\n
                <label>Infos véhicule '" . get_class($this) . "'</label>\n
                <p>*******************</p>
                <p>Nom et modèle du véhicule : $this->_marque $this->_modele</p>\n
                <p>Autonomie : $this->_autonomie</p>\n
                </div>";
        }

        // ---- METHODS ----

        public function getInfos(){
            return $this;
        }

        // ---- ACCESSORS ----

        public function getMarque(){
            return $this->_marque;
        }
        
        public function getModele(){
            return $this->_modele;
        }

        public function setMarque($marque){
            $this->_marque = $marque;
        }

        public function setModele($modele){
            $this->_modele = $modele;
        }
    }
?>