<?php

$week_day = [
    'Monday' => 'Darbo diena',
    'Tuesday' => 'Darbo diena',
    'Wednesday' => 'Darbo diena',
    'Thursday' => 'Darbo diena',
    'Friday' => 'Darbo diena',
    'Saturday' => 'Išeiginė',
    'Sunday' => 'Išeiginė'
];

$dienotvarke = [
    'Keliamės 6:00',
    'Sporto klubas',
    'Rytinis kamštis',
    'Code Academy',
    'Vakarinis kamštis',
    'Netflix'
];

foreach ($week_day as $key => $value) {
    if ($key === 'Friday') {
        $dienotvarke[5] = 'baro linksmybes';
        $week_day[$key] = $dienotvarke;
    } elseif ($value === 'Darbo diena') {
        $week_day[$key] = $dienotvarke;
    }
}

foreach ($week_day as $key => $value) {
    unset($week_day[$key]);
}
var_dump($week_day);
