<?php

$table = [0, 5, 9, -5];
$somme = 0;

for ($i=0; $i<count($table); $i++) {
    $somme += $table[$i];
}
echo "Somme : " . $somme;