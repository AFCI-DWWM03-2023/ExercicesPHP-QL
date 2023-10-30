<?php

$nb1 = (int)readline("Entrez un nombre : ");
$nb2 = (int)readline("Entrez un deuxième nombre : ");
$nb3 = $nb1;
$nb4 = $nb2;
while ($nb1 * $nb2 != 0) {
    if ($nb1 > $nb2) {
        $nb1 = $nb1 - $nb2;
    }
    else {
        $nb2 = $nb2 - $nb1;
    }
}
if ($nb1 == 0) {
    $pgcd = $nb2;
} else {
    $pgcd = $nb1;
}
echo "PPCM = " . $nb3 * $nb4 / $pgcd;