<?php

$jour = (int)readline( "Entrez le jour : " );
$mois = (int)readline( "Entrez le mois : " );
$annee = (int)readline( "Entrez l'année : " );
if ($annee % 400 == 0 or ($annee % 4 == 0 and $annee % 100 != 0)) {
    echo "L'année est bissextile";
} else {
    echo "L'année n'est pas bissextile";
}