<?php
    function writeInfo(String $msg)
    {
        return "<p style=\"background-color: #deb239; margin: 5px;\">$msg</p>";
    }
    
    function writeComptes(Titulaire $titulaire)
    {
        $res = "<div style=\"background-color: #dedede; margin: 5px;\">AFFICHAGE COMPTE DE "
            . mb_strtoupper($titulaire->getNom()) . " " . $titulaire->getPrenom() . " :";
        foreach ($titulaire->getComptes() as $compte)
            $res .= $compte;
        return "$res</div>";
    }

    function util_createUser(String $nom, String $prenom, String $dateDeNaissance, String $ville, String $libelleCompte = null, String $devise = null)
    {
        echo writeInfo("Création d'un nouvel utilisateur : " . mb_strtoupper($nom) . " $prenom.");
        $titulaire = new Titulaire($nom, $prenom, $dateDeNaissance, $ville, $libelleCompte, $devise);
        return $titulaire;
    }

    function writeNames(Titulaire $titulaire)
    {
        return mb_strtoupper($titulaire->getNom()) . " " . $titulaire->getPrenom();
    }
?>