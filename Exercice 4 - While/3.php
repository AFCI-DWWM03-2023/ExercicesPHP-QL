<?php

$nb = (int)readline("Entrez un nombre : ");
$count = 0;
while ($count < 10) {
    echo $nb + $count + 1 . " ";
    $count += 1;
}
echo "\nMerci :)";