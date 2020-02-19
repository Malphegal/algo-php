<?php
    class Voiture
    {
        // ---- FIELDS ----

        const DEFAULT_SPEED = 30;

        private $_marque;
        private $_modele;
        private $_nbPortes;
        private $_vitesseActuelle;

        private $_isOn;

        // ---- CONTRUCTORS ----

        public function __construct($marque, $modele, $nbPortes)
        {
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = 0;
            $this->_isOn = false;
        }
        
        public function __toString()
        {
            return "<div style=\"background-color: #dedede\">\n
                <label>Infos véhicule</label>\n
                <p>*******************</p>
                <p>Nom et modèle du véhicule : $this->_marque $this->_modele</p>\n
                <p>Nombre de portes : $this->_nbPortes</p>\n
                <p>Le véhicule $this->_marque " . ($this->_isOn ? "est démarré. Il roule à $this->_vitesseActuelle km/h." : "n'est pas démarré.") . "</p>\n
                </div>";
        }

        // ---- METHODS ----

        public function demarrer(){
            if ($this->_isOn)
            {
                $this->writeError("est déjà démarré");
                return;
            }
            $this->_isOn = true;
            $this->writeDefaultMessage("démarre");
        }

        public function accelerer($speed = Voiture::DEFAULT_SPEED){
            if (!$this->_isOn)
                return;
            $this->_vitesseActuelle += $speed;
            $this->writeDefaultMessage("accélère de $speed km/h");
        }

        public function ralentir($speed = Voiture::DEFAULT_SPEED){
            if (!$this->_isOn)
            {
                $this->writeError("veut ralentir mais est arrêté");
                return;
            }
            $this->_vitesseActuelle = max($this->_vitesseActuelle - $speed, 0);
            $this->writeDefaultMessage("ralenti de $speed km/h");
        }

        public function stopper(){
            if (!$this->_isOn)
            {
                $this->writeError("veut s'arrêter mais est déjà arrêté");
                return;
            }
            $this->_vitesseActuelle = 0;
            $this->_isOn = false;
            $this->writeDefaultMessage("s'arrête");
        }

        private function writeDefaultMessage($message){
            echo "<p style=\"background-color: #12df12\">Le véhicule $this->_marque $message.</p>";
        }

        private function writeError($message){
            echo "<p style=\"background-color: #ff5555\">Le véhicule $this->_marque $message !</p>";
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