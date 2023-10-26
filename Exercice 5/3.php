<?php

$nb = (int)readline("Entrez un nombre entier: ");
$fact = $nb;
for($i = $nb - 1; $i>0; $i--) {
    $fact *= $i;
}
echo "La factorielle de " . $nb . " vaut : " . $fact;