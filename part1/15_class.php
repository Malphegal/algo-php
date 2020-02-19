<?php
    class Personne
    {
        // ---- FIELDS ----

        private $firstName;
        private $lastName;
        private $birthDate;

        // ---- CONTRUCTORS ----

        public function __construct($firstName, $lastName, $birthDate){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->birthDate = DateTime::createFromFormat("d-m-Y", $birthDate);
        }

        // ---- FUNCTIONS ----

        public function getFirstName(){
            return $this->firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function getBirthDate(){
            return $this->birthDate;
        }

        public function getAge(){
            $now = new DateTime();
            return $now->diff($this->birthDate)->y;
        }
    }
?>