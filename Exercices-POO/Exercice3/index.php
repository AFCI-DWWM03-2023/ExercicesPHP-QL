<?php

require_once "Produit.class.php";

$produit1 = new Produit("Lait", 1, 20);
$produit1->afficherProduit();
$produit1->mettreAJourPrix(0.8);
$produit1->afficherProduit();
$produit1->ajouterStock(10);
$produit1->afficherProduit();
$produit1->vendreProduit(25);
$produit1->afficherProduit();
$produit1->vendreProduit(10);
$produit1->afficherProduit();