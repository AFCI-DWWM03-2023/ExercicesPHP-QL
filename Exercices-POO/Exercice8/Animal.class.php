<?php

abstract class Animal{
    public function __construct(protected string $couleur, protected int $nombrePatte){
    }

    abstract function crier();

    function getCouleur(){return $this->couleur;}
    function setCouleur($couleur){$this->couleur = $couleur;}
}