<?php
    $age = 210;
    $sexe = 'M';

    echo "Age : $age<br/>";
    echo "Sexe : $sexe<br/>";

    if ($sexe == 'M')
        echo "La personnes " . ($age > 20 ? "est imposable." : "n'est pas imposable.");
    else if ($sexe == 'F')
        echo "La personnes " . ($age >= 18 && $age <= 35 ? "est imposable." : "n'est pas imposable.");
    else
        echo "Il y a une erreur dans le sexe de la personne ! (valeur : '$sexe')";
?>