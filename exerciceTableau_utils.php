<?php
    function writeInfo($msg)
    {
        return "<p style=\"background-color: #deb239; margin: 5px;\">$msg</p>";
    }
    
    function writeComptes($titulaire)
    {
        $res = "<div style=\"background-color: #dedede; margin: 5px;\">AFFICHAGE COMPTE DE "
            . mb_strtoupper($titulaire->getNom()) . " " . $titulaire->getPrenom() . " :";
        foreach ($titulaire->getComptes() as $compte)
            $res .= $compte;
        return "$res</div>";
    }

    function util_createUser($nom, $prenom, $dateDeNaissance, $ville)
    {
        echo writeInfo("Création d'un nouvel utilisateur : " . mb_strtoupper($nom) . " $prenom.");
        $titulaire = new Titulaire($nom, $prenom, $dateDeNaissance, $ville);
        return $titulaire;
    }

    function writeNames($titulaire)
    {
        return mb_strtoupper($titulaire->getNom()) . " " . $titulaire->getPrenom();
    }
?>