<?php

$nb = (int)readline("Entrez un nombre entier: ");
echo "Les 5 nombres précédents sont : \n";
for($i=1; $i<=5; $i++) {
    echo $nb - $i . "\n";
}

echo "\n*********************\n\n";

echo "Les 5 nombres suivants sont : \n";
for($i=1; $i<=5; $i++) {
    echo $nb + $i . "\n";
}