<?php

$nombre = readline("Entrez le nombres de valeurs à saisir : ");
$table = [];
for($i=0; $i<$nombre;$i++){
    $table[$i] = readline("Valeur n°" . $i + 1 . ": ");
}

$pos = 0;
$neg = 0;

for($i=0; $i<$nombre;$i++){
    if ($table[$i] > 0){
        $pos++;
    } elseif ($table[$i] < 0){
        $neg++;
    }
}
if ($pos == 1) {
    $poss = "";
} else {
    $poss = "s";
}

if ($neg == 1) {
    $negs = "";
} else {
    $negs = "s";
}

echo "Il y a " . $pos . " valeur" . $poss . " positive" . $poss . " et " . $neg . " valeur" . $negs . " négative" . $negs . ".";