<?php

$notes = [];
for($i=0; $i<9;$i++){
    $temp = readline("Note n°" . $i + 1 . ": ");
    while (!(is_numeric($temp))) {
        $temp = readline("Entrez un nombre: ");
    }
    $notes[$i] = $temp;
}

$somme = 0;
for ($i=0; $i<count($notes); $i++) {
    $somme += $notes[$i];
}
echo "Moyenne : " . $somme / count($notes);