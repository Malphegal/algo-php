<?php
    include "part2_13_classVoiture.php";

    $v1 = new Voiture("Peugeot", "408", 5);
    $v2 = new Voiture("Citroën", "C4", 3);

    echo $v1;

    $v1->stopper();
    $v1->demarrer();
    $v1->stopper();
    
    echo $v1;

    $v1->demarrer();
    $v1->accelerer();
    $v1->accelerer(50);

    echo $v1;
?>