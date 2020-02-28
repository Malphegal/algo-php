<?php
    class ActorMovieRoleRelation
    {
        // ---- STATIC FIELDS ----

        private static $_allRelations = []; // La liste de toutes les relations

        // ---- FIELDS ----

        private $_actor;
        private $_movie;
        private $_role;

        // ---- CONSTRUCTORS ----

        public function __construct(Acteur $actor, Film $movie, Role $role)
        {
            $this->_actor = $actor;
            $this->_movie = $movie;
            $this->_role = $role;
        }

        // ---- STATIC METHODS ----

        public static function createRelation(Acteur $actor, Film $movie, Role $role){
            global $_allRelations;

            $newRelation = new ActorMovieRoleRelation($actor, $movie, $role);
            if ($_allRelations == null)
                $_allRelations = [$newRelation];
            else
                array_push($_allRelations, $newRelation);

            return $newRelation;
        }

        public static function getFilmsOf(Acteur $actor){
            global $_allRelations;

            $res = [];
            foreach ($_allRelations as $key) {
                if ($key->getActor() == $actor)
                {
                    if ($res == null)
                        $res = [$key];
                    else
                        array_push($res, $key);
                }
            }
            return $res;
        }

        public static function getAllActors(Film $movie){
            global $_allRelations;

            $res = [];
            foreach ($_allRelations as $key) {
                if ($key->getMovie() == $movie)
                {
                    if ($res == null)
                        $res = [$key];
                    else
                        array_push($res, $key);
                }
            }
            return $res;
        }

        public static function getAllRoles(Acteur $actor){
            global $_allRelations;

            $res = [];
            foreach ($_allRelations as $key) {
                if ($key->getActor() == $actor)
                {
                    if ($res == null)
                        $res = [$key];
                    else
                        array_push($res, $key);
                }
            }
            return $res;
        }

        public static function getActorsOfRole(Role $role){
            global $_allRelations;

            $res = [];
            foreach ($_allRelations as $key) {
                if ($key->getRole() == $role)
                {
                    if ($res == null)
                        $res = [$key];
                    else
                        array_push($res, $key);
                }
            }
            return $res;
        }

        // ---- ACCESSORS ----

        public function getActor(){
            return $this->_actor;
        }

        public function getMovie(){
            return $this->_movie;
        }

        public function getRole(){
            return $this->_role;
        }

        public function setActor(Acteur $actor){
            $this->_actor = $actor;
        }

        public function setMovie(Film $movie){
            $this->_movie = $movie;
        }

        public function setRole(Role $role){
            $this->_role = $role;
        }
    }
?>