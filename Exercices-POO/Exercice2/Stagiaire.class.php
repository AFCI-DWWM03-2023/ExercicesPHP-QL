<?php

class Stagiaire{
    public function __construct(private string $nom, private array $notes)
    {
    }

    public function afficher(){
        echo $this->nom . " - Notes : ";
        for ($i=0; $i<count($this->notes); $i++) {
            echo $this->notes[$i];
            if ($i != count($this->notes) - 1) {
                echo " - ";
            }
        }
    }
    
    public function getNom(){return $this->nom;}
    public function getNotes(){return $this->notes;}
    public function getNoteSingle($i){return $this->notes[$i];}

    public function setNom($nom){$this->nom = $nom;}
    public function setNotes($notes){$this->nom = $notes;}
    public function setNoteSingle($note, $i){$this->notes[$i] = $note;}
    
    public function moyenne(){
        return array_sum($this->notes)/count($this->notes);
    }

    public function trouverMax(){
        return  max($this->notes);
    }

    public function trouverMin(){
        return min($this->notes);
    }
}