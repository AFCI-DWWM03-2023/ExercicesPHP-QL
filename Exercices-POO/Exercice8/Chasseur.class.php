<?php

class Chasseur extends Humain{
    public function __construct($nom, protected string $arme){
        parent::__construct($nom);
    }

    public function chasser($animal)
    {
        echo "{$this->nom} tire sur le lapin avec son {$this->arme} et...";
        if (random_int(1,6) == 1) {
            $resultat = " le touche.\n";
            $animal->setEnVie(0);
        } else {
            $resultat = " le rate.\n";
        }
        echo $resultat;        
    }

    public function seDeplacer(){
        echo "{$this->nom} avance avec son {$this->arme}.\n";
    }
}