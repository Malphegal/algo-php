<?php
    include '15_class.php';

    echo "Création de 2 personnes :<br/><br/>";

    $p1 = new Personne("Michel", "DUPONT", "13-09-1967");
    $p2 = new Personne("Alice", "DUCHEMIN", "26-07-1996");

    echo "Personne 1 :<br/>";
    $age = $p1->getAge();
    echo $p1->getFirstName() . " " . $p1->getLastName() . " " . $age . " an" . ($age > 1 ? "s." : ".");
    
    echo "<br/><br/>Personne 2 :<br/>";
    $age = $p2->getAge();
    echo $p2->getFirstName() . " " . $p2->getLastName() . " " . $age . " an" . ($age > 1 ? "s." : ".");
?>