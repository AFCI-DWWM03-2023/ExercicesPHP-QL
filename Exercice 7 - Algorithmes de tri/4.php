<?php

$dict = ["cochon", "verre", "tableau", "dictionnaire"];
$perm = true;
while($perm) {
    $perm = false;
    for ($i=0; $i<count($dict)-1; $i++) {
        if ($dict[$i] > $dict[$i+1]) {
            $temp = $dict[$i];
            $dict[$i] = $dict[$i+1];
            $dict[$i+1] = $temp;
            $perm = true;
        }
    }
}

$mot = readline("Entrez un mot : ");
$trouve = false;
for ($i=0; $i<count($dict); $i++) {
    if ($dict[$i] == $mot) {
        $trouve = true;
        $pos = $i;
    }
}
if ($trouve) {
    echo "Le mot est dans le dictionnaire à la position " . $pos;
} else {
    echo "Le mot n'est pas dans le dictionnaire.";
}