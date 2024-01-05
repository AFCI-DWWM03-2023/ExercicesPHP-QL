<?php

require_once "Utilitaire.class.php";

function newLine() {
    echo "\n";
}

$utilitaire1 = new Utilitaire("info");
echo $utilitaire1->getInformation();
newLine();
$somme = Utilitaire::addition(1, 3);
$produit = Utilitaire::multiplication(1, 3);
echo $somme;
newLine();
echo $produit;
newLine();
echo Utilitaire::getTotalOperations();