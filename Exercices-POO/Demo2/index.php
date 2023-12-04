<?php

require_once "Personne8.class.php";

$personne1 = new Personne("DOE", "John");
$personne1->afficherInfos();
echo "<br>";

echo "Prénom : " . $personne1->getPrenom() . "<br>";
echo "Nom : " . $personne1->getNom() . "<br>";

echo "<br>";
$personne1->setPrenom("Jane");
echo "Prénom : " . $personne1->getPrenom() . "<br>";
echo "Nom : " . $personne1->getNom() . "<br>";