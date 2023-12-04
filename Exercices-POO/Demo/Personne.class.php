<?php

class Personne{
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficherInfos(){
        echo "Nom : {$this->nom}, Prénom : {$this->prenom}";
    }
}