<?php

$nb1 = (int)readline("Entrez un nombre : ");
$nb2 = (int)readline("Entrez un deuxième nombre : ");
if ($nb1 < 0 xor $nb2 < 0) {
    echo "Produit est négatif";
} else {
    echo "Produit est positif";
}