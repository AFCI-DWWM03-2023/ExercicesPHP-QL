<?php

echo "1)\n";
$nb = readline("Entrez un nombre : ");
echo $nb * $nb;

echo "\n\n2)\n";
$nom = readline( "Entrez votre prénom : " );
echo "Bonjour, " . $nom;

echo "\n\n3)\n";
$prix = readline( "Entrez le prix HT de l'article : " );
$quantite = readline( "Entrez la quantité : " );
$tva = readline( "Entrez le taux de TVA (en pourcent) : " );
echo "Prix total TTC : " . $prix * $quantite * (1 + $tva * 0.01) . "€";