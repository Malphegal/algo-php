<?php
    $texte = "Notre formation DL commence aujourd'hui";
    echo "L'ancienne phrase est :<br/>" . $texte . "<br/><br/>";

    $texte = str_replace("aujourd'hui", "demain", $texte);
    echo "La nouvelle phrase après modification du mot 'aujourd'hui' en 'demain est :<br/>" . $texte
?>