<?php

require_once "Animal.class.php";
require_once "Lapin.class.php";
require_once "Humain.class.php";
require_once "Chasseur.class.php";

$chasseur = new Chasseur("Bruno", "Model 37");
$lapin = new Lapin(1, "blanc", 4);

$lapin->seNourrir();
while ($lapin->getEnVie()) {
    $chasseur->seDeplacer();
    $lapin->crier();
    $chasseur->chasser($lapin);
    if ($lapin->getEnVie()) {
        $lapin->fuir();
    } else {
        echo "Le lapin {$lapin->getCouleur()} est mort.";
    }
}