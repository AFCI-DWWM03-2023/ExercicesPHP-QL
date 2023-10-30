<?php

$table1 = [1,8,6,2,4,9,8,3];
$table2 = [7,5,3,2,19,5,6,2,4,9,7];
$table3 = [];

for ($i=0; $i<count($table1); $i++) {
    $table3[$i] = $table1[$i];
}
for ($i=0; $i<count($table2); $i++) {
    $table3[$i+count($table1)] = $table2[$i];
}

$perm = true;
while($perm) {
    $perm = false;
    for ($i=0; $i<count($table3)-1; $i++) {
        if ($table3[$i] > $table3[$i+1]) {
            $temp = $table3[$i];
            $table3[$i] = $table3[$i+1];
            $table3[$i+1] = $temp;
            $perm = true;
        }
    }
}

foreach ($table3 as $value) {
    echo $value . " ";
}