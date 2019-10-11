<?php

function array_to_file($array, $file) {
    $json_string = json_encode($array);
    $success = file_put_contents($file, $json_string);

    if ($success !== false) {
        var_dump('$file buvo įrašytas');
        return true;
    } 
        var_dump('$file buvo false');
        return false;
    }
   


function file_to_array($file) {
    if (file_exists($file)) {
        $encoded_array = file_get_contents($file);
        if ($encoded_array != false) {
            return json_decode($encoded_array, true);
        }
    }
    return false;
}

//$current = file_get_contents($file);
//$current .= "John Smith\n";
//file_put_contents($file, $current);
//f-jos kvietimas:
var_dump(file_to_array('data/db.txt'));

