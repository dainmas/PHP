<?php

$array = [];

for ($d = 0; $d < 7; $d++) {
    $savaites_diena = date('l', strtotime("+$d days"));
    $array[$d] = $savaites_diena;
    if ('Saturday' == $savaites_diena) {
        $array[$d] = 'Sleep day';
    } elseif ('Sunday' == $savaites_diena) {
        $array[$d] = 'Church day';
    }
}
// $array[$d] = $savaites_diena; susieju savaites dienas su siandiena
var_dump($array);


