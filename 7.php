<?php
    $ageEnfant = 10;

    echo "Determinons la catégorie d'âge de l'enfant ayant $ageEnfant ans :<br/>";

    if ($ageEnfant >= 12)
        echo "L'enfant est de catégorie Cadet.";
    else if ($ageEnfant > 9)
        echo "L'enfant est de catégorie Minime.";
    else if ($ageEnfant > 7)
        echo "L'enfant est de catégorie Pupille.";
    else if ($ageEnfant > 5)
        echo "L'enfant est de catégorie Poussin.";
    else
        echo "L'enfant n'est dans aucune des catégories."
?>