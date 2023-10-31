<?php

function _ttc($prix, $quantite, $tva) {
    return $prix * $quantite * (1 + $tva * 0.01);
}

function _pgcd($nb1, $nb2){
    while ($nb1 * $nb2 != 0) {
        if ($nb1 > $nb2) {
            $nb1 = $nb1 - $nb2;
        }
        else {
            $nb2 = $nb2 - $nb1;
        }
    }
    if ($nb1 == 0) {
        $pgcd = $nb2;
    } else {
        $pgcd = $nb1;
    }
    return $pgcd;
}

function _ppcm($nb1, $nb2) {
    return $nb1 * $nb2 / _pgcd($nb1, $nb2);
}

function _tablemult ($nb) {
    for($i=1; $i<=10; $i++) {
        echo $i . " x " . $nb . " = " . $i * $nb . "\n";
    }
}

function _factoriel($nb) {
    $fact = $nb;
    for($i = $nb - 1; $i>0; $i--) {
        $fact *= $i;
    }
    return $fact;
}

function _somme($table) {
    $somme = 0;

    for ($i=0; $i<count($table); $i++) {
        $somme += $table[$i];
    }
    return $somme;
}

function _pyramide($dim) {
    for ($i = 0; $i<$dim; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }

    for ($i = $dim+1; $i<$dim*2; $i++) {
        for ($j = 0; $j < $dim * 2 - $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}