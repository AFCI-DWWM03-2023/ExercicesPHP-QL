<?php

class Chien extends Animal{
    public function __construct($nom, $age, protected string $race)
    {
        parent::__construct($nom, $age);
    }

    public function aboyer(){
        echo "ouaf<br>";
    }

    public function afficherInfos()
    {
        parent::afficherInfos();
        echo "Race : {$this->race}<br>";
    }
}