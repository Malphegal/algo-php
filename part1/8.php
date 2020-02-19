<?php
    $nombre = 4;

    echo "Le nombre en entrée pour la table de multiplication : $nombre<br/>";
    echo "<br/>(Solution 1)<br/><br/>";

    for ($i = 1; $i < 11; $i++)
        echo "$i &times; $nombre &equals; " . $i * $nombre . "<br/>";

    echo "<br/>(Solution 2)<br/><br/>";

    $i = 1;
    while ($i < 11){
        echo "$i &times; $nombre &equals; " . $i * $nombre . "<br/>";
        $i++;
    }
?>