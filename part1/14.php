<?php
    $format = "d-m-Y";
    
    $birthdate = DateTime::createFromFormat($format, "17-01-1985");
    $now = new DateTime();

    $age = $now->diff($birthdate);

    echo "Âge de la personne : " .
        $age->y . " an" . ($age->y > 1 ? "s " : " ") .
        $age->m . " mois " .
        $age->d . " jour" . (($age->d > 1 ? "s " : " "));
?>