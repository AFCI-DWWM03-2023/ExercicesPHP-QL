<?php

$table = [];
$i = 0;

while ($i < 5) {
    $nb = readline("Entrez un nombre (" . $i + 1 . "/5): ");
    if(!is_numeric($nb)) {
        echo "Valeur n'est pas un nombre!\n";
    }
    else {
        $table[$i] = $nb;
        $i++;
    }
}

$perm = true;
while($perm) {
    $perm = false;
    for ($i=0; $i<count($table)-1; $i++) {
        if ($table[$i] > $table[$i+1]) {
            $temp = $table[$i];
            $table[$i] = $table[$i+1];
            $table[$i+1] = $temp;
            $perm = true;
        }
    }
}

$cons = 1;
for ($j=0; $j<count($table)-1; $j++) {
    if ( $table[$j]+1 != $table[$j+1] ) {
        $cons = 0;
        break;
    }
}
if ($cons) {
    echo "Les élements du tableau sont consécutifs.";
} else {
    echo "Les élements du tableau ne sont pas consécutifs.";
}