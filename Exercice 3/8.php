<?php

$nb = (int)readline( "Entrez le nombres de photocopies : " );
if ($nb < 11) {
    $prix = $nb * 0.1;
} elseif ($nb < 31) {
    $prix = 1 + ($nb - 10) * 0.09; 
} else {
    $prix = 2.8 + ($nb - 30) * 0.08; 
}
echo "Facture : " . $prix . "€";