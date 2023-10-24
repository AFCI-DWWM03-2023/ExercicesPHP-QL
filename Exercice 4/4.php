<?php

$nb1 = (int)readline("Entrez un nombre : ");
$nb2 = (int)readline("Entrez un deuxième nombre : ");

while ($nb1 * $nb2 != 0) {
    if ($nb1 > $nb2) {
        $nb1 = $nb1 - $nb2;
    }
    else {
        $nb2 = $nb2 - $nb1;
    }
}
if ($nb1 == 0) {
    echo "PGCD = " . $nb2;
} else {
    echo "PGCD = " . $nb1;
}