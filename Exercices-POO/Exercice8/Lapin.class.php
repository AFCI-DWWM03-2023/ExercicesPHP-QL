<?php

class Lapin extends Animal{
    public function __construct(protected bool $enVie, $couleur, $nombrePatte){
        parent::__construct($couleur, $nombrePatte);
    }

    public function getEnVie() {return $this->enVie;}
    public function setEnVie($val) {$this->enVie = $val;}

    public function crier()
    {
        echo "Le lapin crie de peur.\n";
    }

    public function seNourrir(){
        echo "Le lapin mange.\n";
    }

    public function fuir(){
        echo "Le lapin s'enfuit sur ses {$this->nombrePatte} pattes d'un seul bond!\n";
    }
}