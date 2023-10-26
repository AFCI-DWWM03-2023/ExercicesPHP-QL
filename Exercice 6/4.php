<?php

$table1 = [4, 8, 7, 9, 1, 5, 4, 6];
$table2 = [7, 6, 5, 2, 1, 3, 7, 4];

$tablesum = [];
for ($i=0; $i < count($table1); $i++) {
    $tablesum[$i] = $table1[$i] + $table2[$i];
}

echo "Tableau 1 : ";
for ($i=0; $i < count($table1); $i++) {
    echo $table1[$i] . " ";
}
echo "\nTableau 2 : ";
for ($i=0; $i < count($table2); $i++) {
    echo $table2[$i] . " ";
}
echo "\nTableau final : ";
for ($i=0; $i < count($tablesum); $i++) {
    echo $tablesum[$i] . " ";
}