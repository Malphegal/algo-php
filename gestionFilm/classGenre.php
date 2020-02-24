<?php
    class Genre
    {
        // ---- FIELDS ----

        private $_genreName;

        // ---- CONTRUCTORS ----
        
        public function __construct($genreName)
        {
            $this->_genreName = $genreName;
        }

        // ---- METHODS ----

        public function __toString(){
            return $this->_genreName;
        }

        // ---- ACCESSORS ----

        public function getGenreName(){
            return $this->_genreName;
        }

        public function setGenreName($genreName){
            $this->_genreName = $genreName;
        }
    }
?>