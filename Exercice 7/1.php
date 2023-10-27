<?php

$table = [];
$i = 0;

while (true) {
    $nb = readline("Entrez un nombre (ou rien pour terminer): ");
    if(!is_numeric($nb)) {break;}
    $table[$i] = $nb;
    $i++;
}

$cons = 1;
for ($j=0; $j<count($table)-1; $j++) {
    if ($table[$j] > $table[$j+1]) {
        $cons = 0;
        break;
    }
}
if ($cons) {
    echo "Les élements du tableau sont consécutifs.";
} else {
    echo "Les élements du tableau ne sont pas consécutifs.";
}