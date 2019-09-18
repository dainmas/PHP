<?php

$array = [];
$total_work_hours = 0;
$work_hours_per_day = 8;
for ($d = 0; $d < 7; $d++) {
    $savaites_diena = date('l', strtotime("+$d days"));

    if ('Saturday' === $savaites_diena) {
        $array[$savaites_diena] = 'Weekend';
        $work_hours_per_day .= '';
    } elseif ('Sunday' === $savaites_diena) {
        $array[$savaites_diena] = 'Very Weekend';
    } else {
        $array[$savaites_diena] = 'Workday';
        $total_work_hours += $work_hours_per_day;   
    } 
}
 var_dump($total_work_hours);
//$arr[$newkey] = $arr[$oldkey];
//unset($arr[$oldkey]);
//
// $array[$d] = $savaites_diena; susieju savaites dienas su siandiena
var_dump($array);


