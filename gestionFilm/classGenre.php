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

        // ---- ACCESSORS ----

        public function getGenreName(){
            return $this->_genreName;
        }

        public function setGenreName($genreName){
            $this->_genreName = $genreName;
        }
    }
?>