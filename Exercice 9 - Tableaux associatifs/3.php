<?php

$tabNotes = array(
    "racon"=> array(16,15,19),
    "raccon"=> array(7,15,10),
    "racont"=> array(16,15,20),
    "racond"=> array(10,10,10.5),
    "rahcon"=> array(12,13,15),
    "ra con"=> array(7.5,6,2),
    "racons"=> array(9,14,16),
    "raconx"=> array(15,15,19)
);

echo "1) Total des notes des élèves\n2) Moyenne de chaque élève\n3) Notes et moyenne d'un élève en particulier\n4) Quitter\n";
$question = readline("Entrez un numéro de question : ");
while (!is_numeric($question) or $question < 1 or $question > 3) {
    $question = readline("Entrez un numéro valide : ");
}

switch($question) {
    case 1 :
        foreach($tabNotes as $eleve => $notes){
            echo "$eleve : ";
            foreach($notes as $note){
                echo "$note/20, ";
            }
            echo "\n";
        }
        break;
    case 2 :
        foreach($tabNotes as $eleve => $notes){
            echo "$eleve : ";
            $sum = 0;
            foreach($notes as $note){
               $sum += $note;
            }
            echo $sum/count($notes) . "/20\n";
        }
    case 3 :
        $choix = readline("Entrez le nom de l'élève : ");
        if (array_key_exists($choix, $tabNotes)) {
            echo $choix . " : ";
            $sum = 0;
            foreach($tabNotes[$choix] as $note){
                echo "$note/20, ";
                $sum += $note;
            }
            echo "\nMoyenne : " . $sum/count($tabNotes[$choix]) . "/20";
        } else {
            echo "L'élève n'existe pas!";
        }
    case 4 :
        break;
}

