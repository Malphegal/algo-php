<?php
    $prenomLangue = array(
        "Mickaël" => "FRA",
        "Virgile" => "ESP",
        "Marie-Claire" => "ENG"
    );

    foreach(array_keys($prenomLangue) as $key){
        echo GetHello($prenomLangue[$key]) . " $key<br/>";
    }

    echo "<br/>Maintenant le même tableau mais trié alphabétiquement sur les prénoms.<br/><br/>";

    ksort($prenomLangue);
    foreach(array_keys($prenomLangue) as $key){
        echo GetHello($prenomLangue[$key]) . " $key<br/>";
    }

    function GetHello($lang){
        switch ($lang) {
            case "FRA":
                return "Bonjour";
            case "ENG":
                return "Hello";
            case "ESP":
                return "Hola";
            default:
                return "Erreur dans la langue ! ('$lang')";
        }
    }
?>