<link rel="stylesheet" href="style.css" />

<?php
    include "fonctionsGestionFilm.php";
    include "gestionFilmArrays.php";

    spl_autoload_register(function ($class_name) {
        include "class" . $class_name . '.php';
    });

    // ---- Création des variables pour le jeu de tests ----

    echo "<h2>Création des variables pour le jeu de tests</h2>";

    displayInfo("Création du genre <strong>SF</strong>");
    $genreSF = createGenre("SF");
    displayInfo("Création du genre <strong>Thriller</strong>");
    $genreThriller = createGenre("Thriller");

    displayInfo("Création du role <strong>Main</strong>");
    $mainRole = createRole("Main");
    displayInfo("Création du role <strong>Second role</strong>");
    $secondRole = createRole("Second role");
    
    displayInfo("Création de l'acteur <strong>Hamill Mark</strong>");
    $act1 = createActor("Hamill", "Mark", "25-09-1951");
    displayInfo("Création de l'acteur <strong>Harrison Ford</strong>");
    $act2 = createActor("Harrison", "Ford", "13-07-1942");
    
    displayInfo("Création du réalisateur <strong>Lucas George</strong>");
    $dir1 = createDirector("Lucas", "George", "14-05-1944");

    displayInfo("Création du film <strong>Star Wars</strong>");
    $movie1 = createMovie("Star wars", "19-10-1977", 121, "C'est un film.", $dir1, $genreSF);

    // -- Création des relations entre Acteur, Film et Role

    displayInfo("<strong>" . $act1 . "</strong> joue dans le film <strong>" . $movie1 . "</strong> avec le role <strong>" . $mainRole . "</strong>");
    ActorMovieRoleRelation::createRelation($act1, $movie1, $mainRole);
    displayInfo("<strong>" . $act2 . "</strong> joue dans le film <strong>" . $movie1 . "</strong> avec le role <strong>" . $secondRole . "</strong>");
    ActorMovieRoleRelation::createRelation($act2, $movie1, $secondRole);

    // ----------------------
    // ---- Jeu de tests ----
    // ----------------------

    echo "<h2>Début du jeu de tests</h2>";

    // -- Tous les films d'un réalisateur
    $title = "Tous les films de <strong>" . $dir1 . "</strong> :";
    $str = "";
    foreach (getAllMoviesFrom($dir1) as $movie)
        $str .= " * " . $movie . "<br/>";
    displayBlock($title, $str);

    // ----

    // -- Tous les films d'un acteur (film + nom du rôle)
    $title = "Tous les films de <strong>" . $act1 . "</strong> :";
    $str = "";
    foreach (ActorMovieRoleRelation::getFilmsOf($act1) as $amr)
        $str .= " * " . $amr->getMovie() . " : <strong>" . $amr->getRole() . "</strong><br/>";
    displayBlock($title, $str);

    // ----

    // -- Toutes les informations d'un films (titre, année, durée en HH:MM, genre, liste des acteurs (nom + prénom), réalisateur (nom + prénom))
    $title = "Toutes les informations du film <strong>" . $movie1 . "</strong> :";
    $str = "<strong>" . $movie1->getTitle() . "</strong> est sortie en <strong>" . $movie1->getReleaseYear()
        . "</strong> et dure <strong>" . $movie1->getLengthHourMinutes() . "</strong>. C'est un film de <strong>" . $movie1->getGenre() . "</strong>.<br/>"
        . "<span class=\"listtitle\">Les acteurs sont :</span><br/>";
    foreach(ActorMovieRoleRelation::getAllActors($movie1) as $amr)
        $str .= " * " . $amr->getActor() . " : <strong>" . $amr->getRole() . "</strong><br/>";
    $str .= "<br/>Le film a été réalisé par <strong>" . $movie1->getDirector() . "</strong>."; 
    displayBlock($title, $str);

    // ----

    // -- La liste des rôles d'un acteur (nom du rôle et titre du film)
    $title = "Tous les rôles de l'acteur <strong>" . $act1 . "</strong> :<br/>";
    $str = "";
    foreach(ActorMovieRoleRelation::getAllRoles($act1) as $amr)
        $str .= " * " . $amr->getMovie() . " : <strong>" . $amr->getRole() . "</strong>";
    displayBlock($title, $str);

    // ----

    // -- La liste des acteurs ayant incarné un rôle précis (nom + prénom de l'acteur et film dans lequel le rôle a été incarné)
    $title = "Tous les acteurs ayant eu comme rôle <strong>" . $mainRole . "</strong> :</br>";
    $str = "";
    foreach(ActorMovieRoleRelation::getActorsOfRole($mainRole) as $amr){
        $str .= " * " . $amr->getMovie() . " : <strong>" . $amr->getActor() . "</strong>";
    }
    displayBlock($title, $str);

    // ----

    // -- Tous les films d'un genre précis
    $title = "Tous les films du genre <strong>" . $genreSF . "</strong> :</br>";
    $str = "";
    foreach(getAllMoviesOfGenre($genreSF) as $movie){
        $str .= " * " . $movie;
    }
    displayBlock($title, $str);

    // -----------------------------
    // ---- Fin du jeu de tests ----
    // -----------------------------

    function displayBlock($title, $str){
        echo "<div class=\"jeudetest\">
                <label>$title</label>
                <p>$str</p>
            </div>";
    }

    function displayInfo($str){
        echo "<p class=\"infos\">$str</p>";
    }
?>