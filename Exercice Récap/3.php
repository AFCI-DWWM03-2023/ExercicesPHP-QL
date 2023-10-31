<?php

echo "Pensez à un personnage : Melle Rose, le professeur Violet, le Colonel Moutarde, Le Révérend Olive et Mme Leblanc.\ntrue : oui ; false : non\n";

$moustache = filter_var(readline("Votre personnage a-t-il des moustaches? "),FILTER_VALIDATE_BOOLEAN);
$lunettes = filter_var(readline("Votre personnage porte-t-il des lunettes? "),FILTER_VALIDATE_BOOLEAN);
$chapeau = filter_var(readline("Votre personnage porte-t-il un chapeau? "),FILTER_VALIDATE_BOOLEAN);
$homme = filter_var(readline("Est-ce que votre personnage est un homme? "),FILTER_VALIDATE_BOOLEAN);

if ($moustache) {
    echo "Votre personnage est le Colonel Moutarde.";
} elseif (!$lunettes) {
    echo "Votre personnage est Melle Rose.";
} elseif ($chapeau) {
    echo "Votre personnage est le Professeur Violet.";
} elseif ($homme) {
    echo "Votre personnage est le Révérend Olive.";
} else {
    echo "Votre personnage est Mme Leblanc.";
}