<?php
    $texte = "Notre formation DL commence aujourd'hui";
    $nb = strlen($texte);
    echo "La phrase '" . $texte . "' contient " . $nb . " caractère" . ($nb > 1 ? "s." : ".");
?>