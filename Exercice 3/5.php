<?php

$age = (int)readline("Entrez l'age de l'enfant : ");
switch (true) {
    case $age >= 12:
        echo "L'enfant est un \"Cadet\"";
        break;
    case $age >= 10:
        echo "L'enfant est un \"Minime\"";
        break;
    case $age >= 8:
        echo "L'enfant est un \"Pupille\"";
        break;
    case $age >= 6:
        echo "L'enfant est un \"Poussin\"";
        break;
}