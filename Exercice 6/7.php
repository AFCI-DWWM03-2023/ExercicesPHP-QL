<?php

$tableprix = [5, 50, 23, 11];
$tablequant = [10, 1, 4, 3];

$total = 0;
for ($i=0; $i < count($tableprix); $i++) {
    $total += $tableprix[$i] * $tablequant[$i];
}

echo "Prix total : " . $total;