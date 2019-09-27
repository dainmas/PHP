<?php

$array = ['b', 'x', 'x', 'b', 's'];

function count_values($array, $val) {
    $counter = 0;
    foreach ($array as $value) {
        if ($val == $value) {
            $counter++;
        }
    }
    return $counter;
}

print count_values($array, 'x');

function change_values(&$array, $val_from, $val_to) {
    foreach ($array as &$raide) {
        if ($raide == $val_from) {
            $raide = $val_to;
        }
    }
}

change_values($array, 'x', 'X');
var_dump($array);
