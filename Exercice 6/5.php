<?php

$table = [];
for($i=0; $i<9;$i++){
    $table[$i] = readline("Valeur n°" . $i + 1 . ": ");
}

$max = $table[0];
$maxpos = 0;
for($i=0; $i<count($table); $i++) {
    if ($table[$i]>$max) {
        $max = $table[$i];
        $maxpos = $i + 1;
    }
}

echo "La valeur maximale est " . $max . ", elle se trouve à la position " . $maxpos;