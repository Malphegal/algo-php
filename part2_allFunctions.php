<?php

    // Exo 1
    function convertirMajRouge($str){
        return "<p style=\"color: red;\">" . mb_strtoupper($str, "utf-8") . "</p>";
    }

    // Exo 2
    function creerTableHTML($table){
        ksort($table);

        $res = "<table border=1>\n
                <thead>\n
                    <tr>\n
                        <th>Pays</th>\n
                        <th>Capitale</th>\n
                    </tr>\n
                </thead>";
        foreach ($table as $key => $value) {
            $res .= "<tr>\n
                    <td>" . mb_strtoupper($key) . "</td>\n
                    <td>$value</td>\n
                </tr>";
        }
        return "$res</table>";
    }

    // Exo 3
    function creerLienElan(){
        return "<a href=\"https://elan-formation.eu/\" target=\"_blank\">Le site ELAN formation</a>";
    }

    // Exo 4
    function creerTableHTML2($table){

        $codePays = ["France" => "fr",
            "Allemagne" => "de",
            "USA" => "en",
            "Italie" => "it",
            "Espagne" => "es"];

        ksort($table);

        $res = "<table border=1>\n
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
            $res .= "<tr>\n
                    <td>" . mb_strtoupper($key) . "</td>\n
                    <td>$value</td>\n
                    <td><a href=\"https://$code.wikipedia.org/wiki\" target=\"_blank\">Lien</a></td>\n
                </tr>";
        }
        return "$res</table>";
    }

    // Exo 5
    function creerTextboxes($nomsDesChamps){
        $res = "<div style=\"display: flex; flex-direction: column; background-color: #efefef; padding: 10px;\">\n";

        foreach ($nomsDesChamps as $key) {
            $res .= "<label for=\"" . strtolower($key) . "\">$key</label>\n
            <input type=\"text\" style=\"width: 200px;\">\n";
        }

        return "$res</div>";
    }

    // Exo 6
    function alimenterListeDeroulante($elements){
        $res = "<div style=\"background-color: #efefef; padding: 10px;\">\n
            <label for=\"choix\">Choix :</label>\n
            <select name=\"choix\">\n";

        foreach ($elements as $key) {
            $res .= "<option value=\"\">$key</option>\n";
        }
        return "$res</select></div>";
    }

    // Exo 7
    function creerCheckbox($cases){
        $res = "<div style=\"display: flex; flex-direction: column;\"\n
            <label>Les checkboxes :</label>";

        foreach ($cases as $key => $value) {
            $res .= "<div>\n
                <input type=\"checkbox\"" . ($value ? "checked" : "") . ">\n
                $key\n
                </div>";
        }

        return "$res</div>";
    }

    // Exo 8
    function repeterImage($uri, $nb){
        $res = "";
        for ($i = 0; $i < $nb; $i++){
            $res .= "<img src=\"$uri\" style=\"width: " . floor(100 / ($nb + 1)) . "vw\" />\n";
        }
        return $res;
    }

    // Exo 9
    function creerRadio($nomsRadio){
        $res = "";
        foreach ($nomsRadio as $key) {
            $res .= "<div style=\"background-color: #efefef; display: flex; flex-direction: column\">\n
                <div>\n
                <input type=\"radio\" name=\"nomradio\" value=\"$key\" id=\"" . strtolower($key) . "\">\n
                <label>$key</label>\n
                </div>\n";
            }
        return "$res</div>";
    }

    // Exo 10
    function afficherFormulaireExo10(){
        $textBoxes = ["Nom", "Prénom", "Email", "Ville"];
        $civilite = ["Monsieur", "Madame", "Autre"];
        $nomsFormation = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

        $res = "<form style=\"background-color: #efefef\">\n
            <label style=\"padding: 10px\">Le formulaire de l'exo 10</label>\n";
        $res .= creerTextboxes($textBoxes);
        $res .= "<br/><label style=\"padding: 10px\">Sexe</label>";
        $res .= alimenterListeDeroulante($civilite);
        $res .= "<br/><label style=\"padding: 10px\">Formation</label>";
        $res .= alimenterListeDeroulante($nomsFormation);
        $res .= "<input style=\"margin: 10px\" type=\"button\" value=\"Valider\">";
        return "$res</form>";
    }

    // Exo 11
    function formaterDateFr($str){
        setlocale(LC_TIME, "fr_FR");
        return utf8_encode(strftime("%A %d %B %Y", strtotime($str)));
    }

    // Exo 12, 13, 14
    // Pas de méthode

    // Exo 15
    function checkEmail($email){
        $isValide = filter_var($email, FILTER_VALIDATE_EMAIL);
        $msg = $isValide ? "est valide" : "n'est pas valide";
        $style = "style=\"color: " . ($isValide ? "#12ab12" : "#fb5555") . "; margin: 0\"";
        $res = sprintf("<p %s>L'e-mail [%s] %s</p>", $style, $email, $msg);
        return str_replace("^", "&nbsp;", $res);
    }
?>