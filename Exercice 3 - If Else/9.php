<?php

$age = (int)readline( "Entrez votre age : " );
$sex = (string)readline( "Entrez votre sexe (homme ou femme) : " );
if (($sex == "homme" and $age > 20) or ($sex == "femme" and $age > 17 and $age < 36)) {
    echo "Vous êtes imposable";
} else {
    echo "Vous n'êtes pas imposable";
}