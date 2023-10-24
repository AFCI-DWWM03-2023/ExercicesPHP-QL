<?php

$age = (int)readline("Entrez l'age de l'enfant : ");
if ($age < 6) {
    echo "L'enfant est trop jeune pour être catégorisé";
} elseif ($age < 8) {
    echo "L'enfant est un \"Poussin\"";
} elseif ($age < 10) {
    echo "L'enfant est un \"Pupille\"";
} elseif ($age < 12) {
    echo "L'enfant est un \"Minime\"";
} else {
    echo "L'enfant est un \"Cadet\"";
}