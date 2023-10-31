<?php

$rand = rand(1,20);
switch (true) {
    case $rand >= 16:
        echo "Le nombre est compris entre 16 et 20";
        break;
    case $rand >= 11:
        echo "Le nombre est compris entre 11 et 15";
        break;
    case $rand >= 6:
        echo "Le nombre est compris entre 6 et 10";
        break;
    default:
    echo "Le nombre est compris entre 1 et 5";
        break;
}