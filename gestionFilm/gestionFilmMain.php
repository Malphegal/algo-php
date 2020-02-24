<?php
    include "fonctionsGestionFilm.php";
    include "gestionFilmArrays.php";

    spl_autoload_register(function ($class_name) {
        include "class" . $class_name . '.php';
    });

    // ---- Création des variables pour le jeu de tests ----

    $genreSF = createGenre("SF");
    $genreThriller = createGenre("Thriller");

    $mainRole = createRole("Main");
    $secondRole = createRole("Second role");
    
    $act1 = createActor("Hamill", "Mark", "25-09-1951");
    $act2 = createActor("Harrison", "Ford", "13-07-1942");
    
    $dir1 = createDirector("Lucas", "George", "14-05-1944");

    $movie1 = createMovie("Star wars", "19-10-1977", 121, "C'est un film.", $dir1, $genreSF);

    // -- Création des relations entre Acteur, Film et Role

    ActorMovieRoleRelation::createRelation($act1, $movie1, $mainRole);
    ActorMovieRoleRelation::createRelation($act2, $movie1, $secondRole);

    // ----------------------
    // ---- Jeu de tests ----
    // ----------------------

    // -- Tous les films d'un réalisateur
    $title = "Tous les films de <strong>" . $dir1->getFullName() . "</strong> :";
    $str = "";
    foreach (getAllMoviesFrom($dir1) as $movie)
        $str .= " * " . $movie->getTitle() . "<br/>";
    displayBlock($title, $str);

    // ----

    // -- Tous les films d'un acteur (film + nom du rôle)
    $title = "Tous les acteurs de <strong>" . $movie1->getTitle() . "</strong> :";
    $str = "";
    foreach (ActorMovieRoleRelation::getAllActors($movie1) as $amr)
        $str .= " * " . $amr->getActor()->getFullName() . " : <strong>" . $amr->getRole()->getRoleName() . "</strong><br/>";
    displayBlock($title, $str);

    // ----

    // -- Toutes les informations d'un films (titre, année, durée en HH:MM, genre, liste des acteurs (nom + prénom), réalisateur (nom + prénom))
    $title = "Toutes les informations du film " . $movie1->getTitle() . " :";
    $str = $movie1->getTitle() . " est sortie en " . $movie1->getReleaseYear()
        . " et dure " . $movie1->getLengthHourMinutes() . ". C'est un film de " . $movie1->getGenre()->getGenreName() . ".<br/>"
        . "Les acteurs sont :<br/>";
    foreach(ActorMovieRoleRelation::getAllActors($movie1) as $amr)
        $str .= " * " . $amr->getActor()->getFullName() . " : <strong>" . $amr->getRole()->getRoleName() . "</strong><br/>";
    $str .= "<br/>Le film a été réalisé par <strong>" . $movie1->getDirector()->getFullName() . "</strong>."; 
    displayBlock($title, $str);

    // ----

    // -- La liste des rôles d'un acteur (nom du rôle et titre du film)
    $title = "Tous les rôles de l'acteur <strong>" . $act1->getFullName() . "</strong> :<br/>";
    $str = "";
    foreach(ActorMovieRoleRelation::getAllRoles($act1) as $amr)
        $str .= " * " . $amr->getMovie()->getTitle() . " : " . $amr->getRole()->getRoleName();
    displayBlock($title, $str);

    // ----

    // -- La liste des acteurs ayant incarné un rôle précis (nom + prénom de l'acteur et film dans lequel le rôle a été incarné)
    $title = "Tous les acteurs ayant eu comme rôle <strong>" . $mainRole->getRoleName() . "</strong> :</br>";
    $str = "";
    foreach(ActorMovieRoleRelation::actorsOfRole($mainRole) as $amr){
        $str .= " * " . $amr->getMovie()->getTitle() . " : " . $amr->getActor()->getFullName();
    }
    displayBlock($title, $str);

    // ----

    // -- Tous les films d'un genre précis
    $title = "Tous les films du genre <strong>" . $genreSF->getGenreName() . "</strong> :</br>";
    $str = "";
    foreach(getAllMoviesOfGenre($genreSF) as $movie){
        $str .= " * " . $movie->getTitle();
    }
    displayBlock($title, $str);

    // -----------------------------
    // ---- Fin du jeu de tests ----
    // -----------------------------

    function displayBlock($title, $str){
        echo "<div style=\"background-color: #dedede;\">
                <label>$title</label>
                <p>$str</p>
            </div>";
    }
?>