<?php

$tabNotes = array(
    "bruno"=> 16,
    "brunau"=> 14,
    "bruneau"=> 8,
    "brunot"=> 10.5,
    "brunno"=> 20,
    "brunoh"=> 3.5,
    "brunoent"=> 11,
    "bruneaux"=> 13,
    "pruneaux"=> 17.5
);

$sum = 0;
foreach($tabNotes as $eleve => $note){
    echo "$eleve : $note/20\n";
    $sum += $note;
}
echo "Moyenne : " . $sum/count($tabNotes) . "/20";