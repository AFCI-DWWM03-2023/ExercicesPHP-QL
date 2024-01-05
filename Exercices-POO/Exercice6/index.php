<?php

require_once "Employe.class.php";

$employe1 = new Employe("Bruno", 10000);
$employe2 = new Employe("José", 12000);
$employe3 = new Employe("Maxou", 26000);
$employe4 = new Employe("Jérôme", 8000);

echo $employe1->nom;
$employe1->salaire = 15000;
echo $employe1;
$employe1->augmenterSalaire(10);
echo $employe1;