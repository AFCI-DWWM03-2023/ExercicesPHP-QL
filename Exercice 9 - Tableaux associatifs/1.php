<?php

$chomage = array('Autriche' =>4.9, 'Allemagne' =>9.3 ,'Danemark' =>4.8 , 'Espagne' =>9.4 , 'France' =>9.7);

foreach($chomage as $pays => $valeur) {
    echo "$pays : $valeur% de chômage\n";
}

echo "Pays avec moins de 5% de chômage : ";
foreach($chomage as $pays => $valeur) {
    if ($valeur < 5) {
        echo "$pays, ";
    }
}

echo "\nPays avec le taux de chômage le plus faible : " . array_search(min($chomage), $chomage);