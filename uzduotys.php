<?php

$ingredients = [
    'obuolys',
    'miltai',
    'cukrus',
    'pienas',
];

$receptai = [];


foreach ($ingredients as $ingredient) {
    
     $receptai['pyragas'][]= $ingredient ;
     
}
var_dump($receptai);
