<?php

$table = [];

for ($i=0; $i<12; $i++) {
    for ($j=0; $j<8; $j++) {
        $table[$i][$j] = rand(10,99);
        echo $table[$i][$j] . " ";
    }
    echo "\n";
}

$max = $table[0][0];
for ($i=0; $i<count($table); $i++) {
    for ($j=0; $j<count($table[$i]); $j++) {
        if ($max < $table[$i][$j]) {
            $max = $table[$i][$j];
        }
    }
}

echo "La plus grande valeur du tableau est " . $max;