<?php

require "fonctions.php";

echo "
1) Calcul d'un prix TTC
2) Calcul d'un PGCD
3) Calcul d'un PPCM
4) Affichage d'une table de multiplication
5) Calcul d'une factorielle
6) Calcul de la somme des valeurs d'un tableau
7) Affichage d'une pyramide
0) Quitter
";
$question = readline("Tapez votre choix : ");
while (!is_numeric($question) or $question < 0 or $question > 7) {
    $question = readline("Entrez un numéro valide : ");
}


switch($question) {
    case 1:
        $prix = readline( "Entrez le prix HT de l'article : " );
        $quantite = readline( "Entrez la quantité : " );
        $tva = readline( "Entrez le taux de TVA (en pourcent) : " );
        echo "Prix TTC = " . _ttc($prix, $quantite, $tva) . "€";
        break;
    
    case 2:
        $nb1 = readline("Entrez un nombre : ");
        $nb2 = readline("Entrez un deuxième nombre : ");
        echo "PGCD = " . _pgcd($nb1, $nb2);
        break;
    
    case 3:
        $nb1 = readline("Entrez un nombre : ");
        $nb2 = readline("Entrez un deuxième nombre : ");
        echo "PPCM = " . _ppcm($nb1, $nb2);
        break;
    
    case 4:
        $nb = readline("Entrez un nombre : ");
        echo "Table de multiplication de " . $nb . " :\n";
        _tablemult($nb);
        break;

    case 5:
        $nb = readline("Entrez un nombre : ");
        echo "Factorielle de " . $nb . " = " . _factoriel($nb);
        break;

    case 6:
        $table = [2, 6, 8, 9, 0, 42];
        echo _somme($table);
        break;
        
    case 7:
        $lignes = readline("Entrez le nombre de lignes de la pyramide\nLe nombre doit être impair et positif : ");
        while (!is_numeric($lignes) or $lignes <= 0 or $lignes % 2 == 0) {
            $lignes = readline("Saisie incorrecte. Veuillez corriger votre saisie : ");
        }   
        $dim = $lignes / 2;
        _pyramide($dim);
        break;
}