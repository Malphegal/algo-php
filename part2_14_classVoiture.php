<?php
    class Voiture
    {
        // ---- FIELDS ----

        protected $_marque;
        protected $_modele;

        // ---- CONTRUCTORS ----

        public function __construct($marque, $modele)
        {
            $this->_marque = $marque;
            $this->_modele = $modele;
        }
        
        public function __toString()
        {
            return "<div style=\"background-color: #dedede\">\n
                <label>Infos véhicule '" . get_class($this) . "'</label>\n
                <p>*******************</p>
                <p>Nom et modèle du véhicule : $this->_marque $this->_modele</p>\n
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