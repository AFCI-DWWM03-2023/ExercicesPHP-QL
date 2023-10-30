<?php

$heures = (int)readline( "Entrez l'heure : " );
$minutes = (int)readline( "Entrez les minutes : " );
if ($minutes == 59) {
    $minutes = 0;
    $heures += 1;
} else {
    $minutes += 1;
}
if ($heures == 24) {
    $heures = 0;
}
if ($minutes < 10) {
    $zero = "0";
} else {
    $zero = "";
}
echo "Dans une minute, il sera " . $heures . "h" . $zero . $minutes;