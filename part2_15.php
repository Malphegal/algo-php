<?php
    include "part2_allFunctions.php";

    $email1 = "noix.de.coco@banane.fr";
    $email2 = "noix.de.coco@banane.";
    $email3 = "noix.de.coco@.fr";
    $email4 = "@banane.fr";

    checkEmail($email1);
    checkEmail($email2);
    checkEmail($email3);
    checkEmail($email4);
?>