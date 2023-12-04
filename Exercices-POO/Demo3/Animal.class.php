<?php

class Animal{
    public function __construct(protected string $nom, protected int $age){}

    public function afficherInfos(){
        echo "Nom : {$this->nom} <br>";
        echo "Age : {$this->age} ans<br>";
    }
}