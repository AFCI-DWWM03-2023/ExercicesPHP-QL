<?php

require_once "Client.class.php";
require_once "Compte.class.php";

$listeClients = [
    "Bruno" => new Client("Bruno", ["11", "12"]),
    "Racon" => new Client("Racon", ["21", "22"])
];
$listeComptes = [
    "11" => new Compte("11"),
    "12" => new Compte("12"),
    "21" => new Compte("21"),
    "22" => new Compte("22"),
];

function afficherMenu(){
    echo "1. Afficher la liste des clients\n";
    echo "2. Afficher les infos d'un client\n";
    echo "3. Afficher les infos d'un compte\n";
    echo "4. Afficher la liste des clients\n";
    echo "0. Quitter\n";
    echo "Entrez un nombre : ";
}

$exit = 1;

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
echo "~~~~~~~~   Bienvenue!   ~~~~~~~~\n";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

afficherMenu();
while ($exit) {
    $choix = (int)readline();
    switch ($choix) {
        case 0:
            echo "Au revoir!";
            $exit = 0;
            break;
        case 1:
            foreach ($listeClients as $client) {
                echo $client->getId() . " - ";
            }
            echo "\n";
            afficherMenu();
            break;
        case 2:
            $quitter = 1;
            echo "De quel client voulez-vous les infos? ";
            $choixClient = readline();
            while ($choixClient != "") {
                $trouve = 0;
                foreach ($listeClients as $key => $value) {
                    if ($choixClient == $key) {
                        $trouve = 1;
                    }
                }
                if ($trouve) {
                    $listeClients[$choixClient]->afficherSesInfos();
                } else {
                    echo "Le client n'existe pas.\n";
                }
                echo "Entrez un autre nom : ";
                $choixClient = readline();
            }
            echo "Aucun nom entré, retour au menu principal\n";
            afficherMenu();
            break;
        default:
            echo "Entrez un nombre valide.";
    }
}
