<?php
    include "part2_allFunctions.php";

    $dateEnStr = "2018-02-23";
    echo "Voici une date en string : '$dateEnStr'<br/><br/>";

    echo "Voici une date au format français : '";
    echo formaterDateFr($dateEnStr);
    echo "'";
?>