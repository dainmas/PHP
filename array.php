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

foreach ($week_day as $key => $value) {
    if ($key === 'Friday') {
        print 'Friday yra gera diena';
    }
}

var_dump($week_day);
