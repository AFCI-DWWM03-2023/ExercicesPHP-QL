<?php


$table = [1,26,21,0,108,6,44];
$perm = true;
while($perm) {
    $perm = false;
    for ($i=0; $i<count($table)-1; $i++) {
        if ($table[$i] < $table[$i+1]) {
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