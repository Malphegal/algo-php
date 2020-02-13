<?php
    $prixDeBase = 9.99;
    $quantite = 5;
    $tauxTVA = 0.2;

    echo "Prix unitaire de l'article : $prixDeBase €<br/>";
    echo "Quantité : $quantite<br/>";
    echo "taux TVA : " . $tauxTVA * 100 . "%<br/>";
    echo "Le montant de la facture à régler est de : " . $prixDeBase * $quantite * (1 + $tauxTVA) . " €";
?>