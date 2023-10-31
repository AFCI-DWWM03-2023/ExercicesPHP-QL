<?php

$nb = readline("Entrez un nombre compris pair et divisble par 3 : ");
$i = 1;
while (!is_numeric($nb) or $nb % 3 != 0 or $nb % 2 != 0) {
    if (!is_numeric($nb)) {
        echo "Vous n'avez pas saisi de nombre !\n";
    } else {
        if ($nb % 2 != 0) {
            echo "Le nombre n'est pas pair !\n";
        }
        if ($nb % 3 != 0) {
            echo "Le nombre n'est pas divisible par 3 !\n";
        }
    }
    $i++;
    echo "********** Essai numéro $i **********\n";
    $nb = readline("Entrez un nombre compris pair et divisble par 3 : ");
}
echo "Le nombre est $nb et est divisible par 2 et 3";