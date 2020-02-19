<?php
    include "part2_allFunctions.php";

    $email1 = "noix.de.coco@banane.fr";
    $email2 = "noix.de.coco@banane.";
    $email3 = "noix.de.coco@.fr";
    $email4 = "@banane.fr";

    echo checkEmail($email1);
    echo checkEmail($email2);
    echo checkEmail($email3);
    echo checkEmail($email4);
?>