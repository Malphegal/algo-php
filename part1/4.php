<?php
    $texte = "Notre formation DL commence aujourd'hui";

    echo "La phrase '$texte'" . (strrev($texte) == $texte
        ? " est un palindrome"
        : " n'est pas un palindrome");
?>