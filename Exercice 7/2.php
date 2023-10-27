<?php

$table = [1,6,2,0,18,6,4];

for ($i=0; $i<count($table)-1; $i++) {
    $min = $i;
    for ($j=$i+1; $j<count($table); $j++) {
        if ($table[$j] < $table[$min]) {
            $min = $j;
        }
    }
    $temp = $table[$min];
    $table[$min] = $table[$i];
    $table[$i] = $temp;
}

foreach ($table as $value) {
    echo $value . " ";
}
echo "\n";

$table = [1,26,21,0,108,6,44];
$perm = true;
while($perm) {
    $perm = false;
    for ($i=0; $i<count($table)-1; $i++) {
        if ($table[$i] > $table[$i+1]) {
            $temp = $table[$i];
            $table[$i] = $table[$i+1];
            $table[$i+1] = $temp;
            $perm = true;
        }
    }
}

foreach ($table as $value) {
    echo $value . " ";
}