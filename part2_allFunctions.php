<?php

    // Exo 1
    function convertirMajRouge($str){
        return "<p style=\"color: red;\">" . mb_strtoupper($str, "utf-8") . "</p>";
    }

    // Exo 2
    function afficherTableHTML($table){
        ksort($table);

        echo "<table border=1>\n
                <thead>\n
                    <tr>\n
                        <th>Pays</th>\n
                        <th>Capitale</th>\n
                    </tr>\n
                </thead>";
        foreach ($table as $key => $value) {
            echo "<tr>\n
                    <td>" . mb_strtoupper($key) . "</td>\n
                    <td>$value</td>\n
                </tr>";
        }
        echo "</table>";
    }

    // Exo 3
    // Pas de méthode

    // Exo 4
    function afficherTableHTML2($table){

        $codePays = ["France" => "fr",
            "Allemagne" => "de",
            "USA" => "en",
            "Italie" => "it",
            "Espagne" => "es"];

        ksort($table);

        echo "<table border=1>\n
                <thead>\n
                    <tr>\n
                        <th>Pays</th>\n
                        <th>Capitale</th>\n
                        <th>Lien wiki</th>\n
                    </tr>\n
                </thead>";
        foreach ($table as $key => $value) {
            if (!array_key_exists($key, $codePays))
                continue;
            $code = $codePays[$key];
            echo "<tr>\n
                    <td>" . mb_strtoupper($key) . "</td>\n
                    <td>$value</td>\n
                    <td><a href=\"https://$code.wikipedia.org/wiki\" target=\"_blank\">Lien</a></td>\n
                </tr>";
        }
        echo "</table>";
    }

    // Exo 5
    function afficherTextboxes($nomsDesChamps){
        echo "<div style=\"display: flex; flex-direction: column; background-color: #efefef; padding: 10px;\">\n";

        foreach ($nomsDesChamps as $key) {
            echo "<label for=\"" . strtolower($key) . "\">$key</label>\n
            <input type=\"text\" style=\"width: 200px;\">\n";
        }

        echo "</div>";
    }

    // Exo 6
    function alimenterListeDeroulante($elements){
        echo "<div style=\"background-color: #efefef; padding: 10px;\">\n
            <label for=\"choix\">Choix :</label>\n
            <select name=\"choix\">\n";

        foreach ($elements as $key) {
            echo "<option value=\"\">$key</option>\n";
        }
        echo "</select></div>";
    }

    // Exo 7
    function genererCheckbox($cases){
        echo "<div style=\"display: flex; flex-direction: column;\"\n
            <label>Les checkboxes :</label>";

        foreach ($cases as $key => $value) {
            echo "<div>\n
                <input type=\"checkbox\"" . ($value ? "checked" : "") . ">\n
                $key\n
                </div>";
        }

        echo "</div>";
    }

    // Exo 8
    function repeterImage($uri, $nb){
        for ($i = 0; $i < $nb; $i++){
            echo "<img src=\"$uri\" style=\"width: " . floor(100 / ($nb + 1)) . "vw\" />\n";
        }
    }

    // Exo 9
    function afficherRadio($nomsRadio){
        foreach ($nomsRadio as $key) {
            echo "<div style=\"background-color: #efefef; display: flex; flex-direction: column\">\n
                <div>\n
                <input type=\"radio\" name=\"nomradio\" value=\"$key\" id=\"" . strtolower($key) . "\">\n
                <label>$key</label>\n
                </div>\n";
            }
        echo "</div>";
    }

    // Exo 10
    function afficherFormulaireExo10(){
        $textBoxes = ["Nom", "Prénom", "Email", "Ville"];
        $civilite = ["Monsieur", "Madame", "Autre"];
        $nomsFormation = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

        echo "<form style=\"background-color: #efefef\">\n
            <label style=\"padding: 10px\">Le formulaire de l'exo 10</label>\n";
        echo afficherTextboxes($textBoxes);
        echo "<br/><label style=\"padding: 10px\">Sexe</label>";
        echo alimenterListeDeroulante($civilite);
        echo "<br/><label style=\"padding: 10px\">Formation</label>";
        echo alimenterListeDeroulante($nomsFormation);
        echo "<input style=\"margin: 10px\" type=\"button\" value=\"Valider\">";
        echo "</form>";
    }

    // Exo 11
    function formaterDateFr($str){
        setlocale(LC_TIME, "fr_FR");
        echo utf8_encode(strftime("%A %d %B %Y", strtotime($str)));
    }
?>