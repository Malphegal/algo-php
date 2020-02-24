<?php
    class Film
    {
        // ---- FIELDS ----

        private $_title;
        private $_releaseDate;
        private $_length;
        private $_synopsis;
        private $_director;
        private $_genre;

        // ---- CONTRUCTORS ----
        
        public function __construct($title, $releaseDate, $length, $synopsis, Realisateur $director, Genre $genre)
        {
            $this->_title = $title;
            $this->_releaseDate = $releaseDate;
            $this->_length = $length;
            $this->_synopsis = $synopsis;
            $this->_director = $director;
            $this->_genre = $genre;
        }

        // ---- ACCESSORS ----

        public function getTitle(){
            return $this->_title;
        }

        public function getReleaseDate(){
            return $this->_releaseDate;
        }

        public function getLength(){
            return $this->_length;
        }

        public function getSynopsis(){
            return $this->_synopsis;
        }

        public function getDirector(){
            return $this->_director;
        }

        public function getGenre(){
            return $this->_genre;
        }

        public function getReleaseYear(){
            return DateTime::createFromFormat("d-m-Y", $this->_releaseDate)->format("Y");
        }

        public function getLengthHourMinutes(){
            return sprintf("%'.02d h %'.02d m", floor($this->_length / 60), $this->_length % 60);
        }

        public function setTitle($title){
            $this->_title = $title;
        }

        public function setReleaseDate($releaseDate){
            $this->_releaseDate = $releaseDate;
        }

        public function setLength($length){
            $this->_length = $length;
        }

        public function setSynopsis($synopsis){
            $this->_synopsis = $synopsis;
        }

        public function setDirector($director){
            $this->_director = $director;
        }

        public function setGenre($genre){
            $this->_genre = $genre;
        }
    }
?>