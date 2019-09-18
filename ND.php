<?php

$array = [];

for ($d = 0; $d < 7; $d++) {
    $savaites_diena = date('l', strtotime("+$d days"));

    if ('Saturday' === $savaites_diena) {
        $array[$savaites_diena] = 'Sleep day';
    } elseif ('Sunday' === $savaites_diena) {
        $array[$savaites_diena] = 'Church day';
    } else {
        $array[$savaites_diena] = 'Workday';
    }
}
//$arr[$newkey] = $arr[$oldkey];
//unset($arr[$oldkey]);
//
// $array[$d] = $savaites_diena; susieju savaites dienas su siandiena
var_dump($array);


