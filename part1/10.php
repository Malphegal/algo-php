<?php
    $montantAPayer = 157.24;
    $montantVerse = 200;

    if ($montantVerse < $montantAPayer) {
        echo "La somme perçue est inférieure à la somme demandée !";
        return;
    }

    $resteAPayer = $montantVerse - $montantAPayer;
    
    echo "Montant à payer : $montantAPayer €<br/>";
    echo "Montant versé : $montantVerse €<br/>";
    echo "Montant à rendre : $resteAPayer €<br/>";

    echo MontantEnBillet($resteAPayer);

    function MontantEnBillet($resteAPayer){
        $nbDeMonnaie = 15;

        $strMonnaieWithS = array ("Billets de 500", "Billets de 200", "Billets de 100", "Billets de 50", "Billets de 20", "billets de 10", "Billets de 5", "Pièces de 2"," Pièces de 1", "Pièces de 0.5", "Pièces de 0.2", "Pièces de 0.1", "Pièces de 0.05", "Pièces de 0.02", "Pièces de 0.01");
        $strMonnaie = array ("Billet de 500", "Billet de 200", "Billet de 100", "Billet de 50", "Billet de 20", "billet de 10", "Billet de 5", "Pièce de 2"," Pièce de 1", "Pièce de 0.5", "Pièce de 0.2", "Pièce de 0.1", "Pièce de 0.05", "Pièce de 0.02", "Pièce de 0.01");
        $valeursMonnaie = array(500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01);
        $monnaies = array_fill(0, $nbDeMonnaie, 0);

        while ($resteAPayer > 0){
            for ($i = 0; $i < $nbDeMonnaie; $i++)
                if ($resteAPayer >= $valeursMonnaie[$i]){
                    $monnaies[$i]++;
                    $resteAPayer -= $valeursMonnaie[$i];
                    $resteAPayer = round($resteAPayer, 2);
                    break;
                }
        }

        $res = "";
        for ($i = 0; $i < $nbDeMonnaie; $i++)
            if ($monnaies[$i] > 0)
                $res .= (strlen($res) > 0 ? " - " : "") . "$monnaies[$i] " . ($monnaies[$i] == 1 ? $strMonnaie[$i] : $strMonnaieWithS[$i]);
        return $res;
    }
?>