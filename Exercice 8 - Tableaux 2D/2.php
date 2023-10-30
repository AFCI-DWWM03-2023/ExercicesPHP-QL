<?php

$dim1 = readline("Entrez un nombre supérieur à 0 : ");
while (!is_numeric($dim1) or $dim1 <= 0) {
    $dim1 = readline("Entrez un nombre supérieur à 0 : ");
}

// première moitié de la pyramide, de 0 à dim1
for ($i = 0; $i<$dim1; $i++) {
    // en descendant chaque "étage", on augmente le nombre de caractères à afficher
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

// seconde moitié, on inverse la pyramide (nombre de caractères diminue à chaque étage)
for ($i = $dim1+1; $i<$dim1*2; $i++) {
    for ($j = 0; $j < $dim1 * 2 - $i; $j++) {
        echo "*";
    }
    echo "\n";
}

$dim2 = readline("Entrez un nombre supérieur à 0 : ");
while (!is_numeric($dim2) or $dim2 <= 0) {
    $dim2 = readline("Entrez un nombre supérieur à 0 : ");
}

// pyramide de meme dimensions que la premiere
for ($i = 0; $i<$dim2; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        if ($i == $dim2-1 or $j == 0 or $j == $i) {
            // on affiche un X si le caractère est en première ou derniere colonne ainsi qu'en derniere ligne
            echo "X";
        } else {
            echo "0";
        }
    }
    echo "\n";
}