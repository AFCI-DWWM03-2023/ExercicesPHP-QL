<?php

$heures = (int)readline( "Entrez l'heure : " );
$minutes = (int)readline( "Entrez les minutes : " );
$secondes = (int)readline( "Entrez les secondes : " );
if ($secondes == 59) {
    $secondes = 0;
    $minutes += 1;
} else {
    $secondes += 1;
}
if ($minutes == 60) {
    $minutes = 0;
    $heures += 1;
}
if ($heures == 24) {
    $heures = 0;
}
if ($minutes < 10) {
    $zerom = "0";
} else {
    $zerom = "";
}
if ($secondes < 10) {
    $zeros = "0";
} else {
    $zeros = "";
}
echo "Dans une seconde, il sera " . $heures . "h" . $zerom . $minutes . "m" . $zeros . $secondes . "s";