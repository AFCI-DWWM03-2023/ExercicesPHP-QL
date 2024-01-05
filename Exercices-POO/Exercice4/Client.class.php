<?php

class Client{
    public function __construct(protected string $id, protected array $compteBancaire){
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}

    public function afficherSesInfos(){
        echo "Identifiant : {$this->id}\n";
        echo "Comptes bancaires : ";
        foreach ($this->compteBancaire as $value) {
            echo "$value - ";
        }
        echo "\n";
    }
}