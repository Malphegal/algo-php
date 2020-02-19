<?php
    $marques = array("Peugeot", "Renault", "BMW", "Mercedes");

    echo "il y a " . count($marques) . " marque" . (count($marques) > 1 ? "s" : "") . " de voitures<br/>";
    for ($i = 0; $i < count($marques); $i++)
        echo " * $marques[$i]<br/>";
?>