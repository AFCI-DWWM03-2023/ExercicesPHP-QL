<?php

$i = 0;
$table = [];
while (true) {
    $nb = readline("Entrez un nombre (ou rien pour terminer): ");
    if(!is_numeric($nb)) {break;}
    $table[$i] = $nb;
    $i++;
}

$perm = true;
$doublon = false;
while($perm) {
    $perm = false;
    for ($i=0; $i<count($table)-1; $i++) {
        if ($table[$i] < $table[$i+1]) {
            $temp = $table[$i];
            $table[$i] = $table[$i+1];
            $table[$i+1] = $temp;
            $perm = true;
        }
        elseif ($table[$i] == $table[$i+1]) {
            $doublon = true;
            break;
        }
    }
}
if ($doublon) {
    echo "Il y a un ou plusieurs doublons.";
} else {
    echo "Il n'y a pas de doublons.";
}