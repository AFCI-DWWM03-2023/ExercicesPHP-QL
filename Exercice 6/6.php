<?php

$notes = [];
for($i=0; $i<9;$i++){
    $notes[$i] = readline("Note n°" . $i + 1 . ": ");
}

$somme = 0;
for ($i=0; $i<count($notes); $i++) {
    $somme += $notes[$i];
}
$moyenne = $somme / count($notes);
echo "Moyenne : " . $moyenne . "\n";

$sup = 0;
for ($i=0; $i<count($notes); $i++) {
    if ($notes[$i]>$moyenne) {
        $sup++;
    }
}
echo $sup . " notes sont supérieures à la moyenne de classe";