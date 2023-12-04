<?php

require_once "Stagiaire.class.php";

$stagiaire1 = new Stagiaire("Bruno", [15, 18, 20, 17, 16]);
$stagiaire1->afficher();
echo "<br>";
echo "Note max : " . $stagiaire1->trouverMax();
echo "<br>";
echo "Note min : " . $stagiaire1->trouverMin();
echo "<br>";
echo "Moyenne : " . $stagiaire1->moyenne();
echo "<br>";

$stagiaire1->setNoteSingle(20, 0);
$stagiaire1->afficher();