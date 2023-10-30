<?php

$nb = (int)readline("Entrez un nombre compris entre 1 et 3: ");
while ($nb > 3 or $nb < 1) {
    $nb = (int)readline("Entrez un nombre compris entre 1 et 3!! ");
}
echo "Merci :)";