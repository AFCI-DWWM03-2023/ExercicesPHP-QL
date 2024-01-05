<?php

class Compte{
    public function __construct(protected string $numeroCompte, protected float $solde = 0)
    { 
    }

    public function getNumero(){return $this->numeroCompte;}
    public function getSolde(){return $this->solde;}
    public function setNumero($numeroCompte){$this->numeroCompte = $numeroCompte;}
    public function setSolde($solde){$this->solde = $solde;}

    public function afficherInformationCompte()
    {
        echo "Numero compte : {$this->numeroCompte} - ";
        echo "Solde : {$this->solde}€\n";
    }

    public function retrait($somme){
        if ($this->solde < $somme) {
            echo "Solde insuffisant\n";
        } else {
            $this->solde -= $somme;
        }
    }

    public function versement($somme){
        $this->solde += $somme;
    }
}