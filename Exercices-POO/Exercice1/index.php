<?php

require_once "Voiture.class.php";

$voiture1 = new Voiture("Jerdod", "Flygasser", 2012, "bleue");
$voiture1->afficher();
echo "<br>";
$voiture1->accelerer(20);
$voiture1->afficher();