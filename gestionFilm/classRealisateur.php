<?php
    class Realisateur extends Personne
    {
        // ---- CONTRUCTORS ----
        
        public function __construct($lastName, $firstName, $birthDate)
        {
            parent::__construct($lastName, $firstName, $birthDate);
        }
    }
?>