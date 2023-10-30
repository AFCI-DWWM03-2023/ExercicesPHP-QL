<?php

$nb = (int)readline("Entrez un nombre : ");
if ($nb == 0) {
    echo "Nombre est nul";
} elseif ($nb < 0) {
    echo "Nombre est négatif";
} else {
    echo "Nombre est positif";
}
