<?php

class Voiture{
    public function __construct(private string $marque, private string $modele, private int $annee, private string $couleur, private int $vitesse_actuelle = 0)
    {
    }

    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getAnnee(){return $this->annee;}
    public function getCouleur(){return $this->couleur;}
    public function getVitesse(){return $this->vitesse_actuelle;}

    public function setMarque($marque){$this->marque = $marque;}
    public function setModele($modele){$this->modele = $modele;}
    public function setAnnee($annee){$this->annee = $annee;}
    public function setCouleur($couleur){$this->couleur = $couleur;}
    public function setVitesse($vitesse){$this->vitesse_actuelle = $vitesse;}

    public function afficher(){
        echo "{$this->marque} - {$this->modele} ({$this->annee}) - {$this->couleur} - Vitesse : {$this->vitesse_actuelle} km/h ";
    }

    public function accelerer(int $vitesse) {
        $this->vitesse_actuelle += $vitesse;
    }
}