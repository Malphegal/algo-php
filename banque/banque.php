<?php
    include "classTitulaire.php";
    include "banque_utils.php";

    $p1 = util_createUser("Pastorès", "Pierre", "26-07-1996", "Haguenau");

    echo $p1; // Affichage complet client p1

    echo writeInfo("On ajoute un compte [Livret A (" . Compte::EURO . ")] à " . writeNames($p1) . ".");
    $p1->ajouterCompte("Livret A", Compte::EURO);

    echo $p1; // Affichage complet client p1

    echo writeComptes($p1); // Affichage complet des comptes de p1
    
    // Quelques modification sur le client p1
    echo writeInfo("Ajout d'un compte [Livret bleu (" . Compte::EURO . ")] à " . writeNames($p1) . ".");
    $p1->ajouterCompte("Livret bleu", Compte::EURO);

    echo writeInfo("Ajout de 17,58 unité d'argent à " . writeNames($p1) . " au compte [Livret A].");
    $p1->deposerSommeAuCompte("Livret A", 17.58);
    
    echo writeInfo("Ajout de 400 unité d'argent à " . writeNames($p1) . " au compte [Livret bleu].");
    $p1->deposerSommeAuCompte("Livret bleu", 400);

    echo $p1; // Affichage complet client p1

    // -- p2

    echo "<hr style=\"height: 10px; background-color: black; border-style: hidden; margin: 5px;\">";

    $p2 = util_createUser("martini", "Patrick", "27-05-1967", "Gries");

    echo $p2;

    echo writeInfo("Ajout d'un compte [Livret bleu (" . Compte::POUND . ")] à " . writeNames($p2) . ".");
    $p2->ajouterCompte("Livret bleu", Compte::POUND);

    echo writeInfo("Ajout de 297 unité d'argent à " . writeNames($p2) . " au compte [Livret bleu].");
    $p2->deposerSommeAuCompte("Livret bleu", 297);

    echo writeInfo("Retrait de 141.12 unité d'argent à " . writeNames($p2) . " au compte [Livret bleu].");
    $p2->retirerSommeAuCompte("Livret bleu", 141.12);

    echo $p2;

    echo writeInfo("Ajout d'un compte [Livret A (" . Compte::POUND . ")] à " . writeNames($p2) . ".");
    $p2->ajouterCompte("Livret A", Compte::POUND);

    echo writeInfo("Ajout de 740 unité d'argent à " . writeNames($p2) . " au compte [Livret A].");
    $p2->deposerSommeAuCompte("Livret A", 740);

    echo writeInfo("Retrait de 300 unité d'argent à " . writeNames($p2) . " au compte [Livret bleu].");
    $p2->retirerSommeAuCompte("Livret bleu", 300);
    
    echo $p2;
    
    echo writeInfo("Virement de 450 unité d'argent de " . writeNames($p2) . " du compte [Livret A] vers [Livret bleu]");
    Compte::virementEntre($p2->getCompte("Livret A"), $p2->getCompte("Livret bleu"), 450);
    
    echo $p2;
?>