<?php
    function getAllMoviesFrom(Realisateur $director)
    {
        if ($director == null)
        return null;

        global $allMovies;
        
        $res = [];
        foreach ($allMovies as $key) {
            if ($key->getDirector() == $director)
                if ($res == null)
                    $res = [$key];
                else
                    array_push($res, $key);
        }
        return $res;
    }

    function getAllMoviesOfGenre(Genre $genre)
    {
        if ($genre == null)
        return null;

        global $allMovies;

        $res = [];
        foreach ($allMovies as $key) {
            if ($key->getGenre() == $genre)
                if ($res == null)
                    $res = [$key];
                else
                    array_push($res, $key);
        }
        return $res;
    }
?>