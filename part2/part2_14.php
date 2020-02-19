<?php
    include "part2_14_classVoitureElec.php";

    $v1 = new Voiture("Peugeot", "408");
    $v2 = new VoitureElec("BMW", "i3", 100);

    echo $v1->getInfos() . "<br/>";
    echo $v2->getInfos() . "<br/>";
?>