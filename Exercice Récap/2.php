<?php

$rand = rand(0,20);
echo "Nombre : $rand\n";

switch (true) {
    case $rand >= 14:
        echo "Hello";
        break;
    case $rand >= 7:
        echo "Salut";
        break;
    default:
        echo "Bonjour";
        break;
}