<?php

class Produit{
    public function __construct(private string $nom, private float $prix, private int $stock)
    {
    }

    public function afficherProduit(){
        echo "{$this->nom} - Prix : {$this->prix}€ - Quantité en stock : {$this->stock}<br>" ;
    }

    public function mettreAJourPrix($nouveauPrix){
        $this->prix = $nouveauPrix;
    }
    
    public function ajouterStock($quantiteAjoutee){
        $this->stock += $quantiteAjoutee;
    }

    public function vendreProduit($quantiteVendue){
        if ($this->stock < $quantiteVendue) {
            echo "Stock insuffisant<br>";
        } else {
            $this->stock -= $quantiteVendue;
        }
    }
}