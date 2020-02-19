<?php
    $notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);

    echo "Les notes obtenues par l'élève sont : ";
    for ($i = 0; $i < count($notes); $i++)
        echo "$notes[$i] ";

    echo "<br/>Sa moyenne générale est donc de : " . round(array_sum($notes) / count($notes), 2);
?>