<?php

for ($i = 1; $i <= 5; $i++) {
    $nb = (int)readline("Entrez un nombre entier: ");
    if ($i == 1) {
        $min = $nb;
        $max = $nb;
    } else {
        if ($min > $nb) {
            $min = $nb;
        }
        if ($max < $nb) {
            $max = $nb;
        }
    }
}
echo "min = " . $min . "\n";
echo "max = " . $max;
