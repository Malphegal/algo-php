<?php

    // ---- GLOBAL FIELDS ----

    $allActors = []; 
    $allGenres = [];
    $allDirectors = [];
    $allMovies = [];
    $allRoles = [];

    // ---- CREATE METHODS ----

    function createActor(String $lastName, String $firstName, String $birthDate){
        $newActor = new Acteur($lastName, $firstName, $birthDate);
        global $allActors;
        if ($allActors == null)
            $allActors = [$newActor];
        else
            array_push($allActors, $newActor);
        return $newActor;
    }

    function createDirector(String $lastName, String $firstName, String $birthDate){
        $newDirector = new Realisateur($lastName, $firstName, $birthDate);
        global $allDirectors;
        if ($allDirectors == null)
            $allDirectors = [$newDirector];
        else
            array_push($allDirectors, $newDirector);
        return $newDirector;
    }

    function createGenre(String $genreName){
        global $allGenres;
        foreach ($allGenres as $key) {
            if ($key == $genreName)
                return;
        }
        $newGenre = new Genre($genreName);
        if ($allGenres == null)
            $allGenres = [$newGenre];
        else
            array_push($allGenres, $newGenre);
        return $newGenre;
    }

    function createRole(String $roleName){
        global $allRoles;
        foreach ($allRoles as $key) {
            if ($key == $roleName)
                return;
        }
        $newRole = new Role($roleName);
        if ($allRoles == null)
            $allRoles = [$newRole];
        else
            array_push($allRoles, $newRole);
        return $newRole;
    }

    function createMovie(String $title, String $releaseDate, int $length, String $synopsis, Realisateur $director, Genre $genre){
        $newMovie = new Film($title, $releaseDate, $length, $synopsis, $director, $genre);
        global $allMovies;
        if ($allMovies == null)
            $allMovies = [$newMovie];
        else
            array_push($allMovies, $newMovie);
        return $newMovie;
    }

    // ---- GETTERS ----

    function getRole(String $role){
        global $allRoles;
        foreach ($allRoles as $key)
            if ($key->getRoleName() == $role)
                return $key;
        return null;
    }

    function getGenre(String $genre){
        global $allGenres;
        foreach ($allGenres as $key)
            if ($key->getGenreName() == $genre)
                return $key;
        return null;
    }

    function getActor(Acteur $actor){
        global $allActors;
        foreach ($allActors as $key)
            if ($key->getGenreName() == $actor)
                return $key;
        return null;
    }

    function getDirector(Realisateur $director){
        global $allDirectors;
        foreach ($allDirectors as $key)
            if ($key->getGenreName() == $director)
                return $key;
        return null;
    }

    function getMovie(Film $movie){
        global $allMovies;
        foreach ($allMovies as $key)
            if ($key->getGenreName() == $movie)
                return $key;
        return null;
    }
?>