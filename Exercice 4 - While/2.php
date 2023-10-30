<?php

$nb = (int)readline("Entrez un nombre compris entre 10 et 20: ");
while ($nb > 20 or $nb < 10) {
    if ($nb > 20) {
        $nb = (int)readline("Plus petit ! ");
    } else {
        $nb = (int)readline("Plus grand ! ");
    }
}
echo "Merci :)";