<?php
    abstract class Personne
    {
        // ---- FIELDS ----

        protected $_lastName;
        protected $_firstName;
        protected $_birthDate;

        // ---- CONTRUCTORS ----
        
        public function __construct($lastName, $firstName, $birthDate)
        {
            $this->_lastName = $lastName;
            $this->_firstName = $firstName;
            $this->_birthDate = $birthDate;
        }

        // ---- METHODS ----

        // ---- ACCESSORS ----

        public function getFullName(){
            return $this->_firstName . " " . $this->_lastName;
        }

        public function getLastName(){
            return $this->_lastName;
        }

        public function getFirstName(){
            return $this->_firstName;
        }

        public function getBirthDate(){
            return $this->_birthDate;
        }

        public function setLastName($lastName){
            $this->_lastName = $lastName;
        }

        public function setReleaseDate($firstName){
            $this->_firstName = $firstName;
        }

        public function setBirthDate($birthDate){
            $this->_birthDate = $birthDate;
        }
    }
?>