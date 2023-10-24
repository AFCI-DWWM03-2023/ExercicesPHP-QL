<?php

$nb = (int)readline( "Entrez le nombres de photocopies : " );
if ($nb < 11) {
    $prix = $nb * 0.1;
} elseif ($nb < 21) {
    $prix = 1 + ($nb - 10) * 0.09; 
} else {
    $prix = 1.9 + ($nb - 20) * 0.08; 
}
echo "Facture : " . $prix . "€";