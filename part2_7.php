<?php
    include "part2_allFunctions.php";

    $cases = ["Choix 1" => false,
        "Choix 2" => true,
        "Choix 3" => false];
    
    echo creerCheckbox($cases);
?>