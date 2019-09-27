<?php

$x = 0;
$b = &$x;
//panaikinam reference:
unset($b);
$b = 1;

print $x;


$roll_joints = true;
$joint1 = &$roll_joints;
$joint2 = &$joint1;
$joint3 = &$joint2;

print $joint1 . $joint2 . $joint3 . '<br>';

$sheep = ['bee'];
//for ciklas surišantis avis
for ($i = 0; $i < 4; $i++) {
    $sheep[] = &$sheep[$i];
}

//vieną avį atrišau
foreach ($sheep as $key => $value) {
    unset($sheep[$key]);
    $sheep[$key] = $value;
}

$sheep[3] = 'Aš kitokia!';
var_dump($sheep);